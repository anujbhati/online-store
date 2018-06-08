$(document).ready(function () {
    /************[ check box with it's textbox ]*************/
    $('.item-group input[type=checkbox]').on('change',function () {
        if($(this).is(':checked')){ // if checkbox was unchecked and became checked
            $(this).closest('.item-group').find('.item-quantity').prop('disabled', false);
        } else{ // if checkbox was checked and became unchecked
            $(this).closest('.item-group').find('.item-quantity').prop('disabled', true).val("").closest('.item-group').find('.total-here').text("");
        }
    });
    /************[ check box with it's textbox ]*************/

    /************[ textbox and show the total ]*************/
    $('.item-quantity').on('input',function () {
        $(this).closest('.item-group').find('.total-here').text($(this).val() * $(this).data('once'));
    });
    /************[ textbox and show the total ]*************/

    /************[ make-order validation ]*************/
    $('#make-order,form').on('input',function () {
        $('.append-here').find('.alert').remove();
    });
    $('#make-order,form').on('submit',function () {
        // user information
        $full_name      = $('#full-name').val();
        $houseNumber    = $('#houseNumber').val();
        $city           = $('#city').val();
        $zipcode        = $('#zipcode').val();
        $country        = $('#country').val();
        $street         = $('#streed').val();

        $('.append-here').find('.alert').remove();

        // User Information validation
        if ($full_name == '' || $houseNumber=='' || $city=='' || $zipcode=='' || $country=='' || $street==''){
            $('.append-here').append('<div class="alert alert-danger text-center">Error Please Fill All Fields </div>');
        } else if(!$.isNumeric($houseNumber) || $houseNumber <= 0){
            $('.append-here').append('<div class="alert alert-danger text-center">House Number Must be Numeric > 0</div>');
        } else if($zipcode.replace(" ","").length != 6 || $zipcode.length != 6){
            $('.append-here').append('<div class="alert alert-danger text-center">Zip Code must be 6 digit</div>');
        } else if($country != 'Canada'){
            $('.append-here').append('<div class="alert alert-danger text-center">The Default Country Must Be Canada</div>');
        } else{
            // choose items validation
            $checkCount = false;
            $unCheckedCount = 0;
            $allCheckBox = $('.item-group input[type=checkbox]').length;
            $('.item-group input[type=checkbox]').each(function () { // check for every checkbox
                $checkChecked = $(this).is(':checked');
                $quantity = $(this).closest('.item-group').find('.item-quantity').val();
                if ($checkChecked){ // if this checkbox checked
                    if($quantity != ''){ // if the user enter value for the quantity
                        if ((Math.floor($quantity) == $quantity && $.isNumeric($quantity)) && $quantity > 0){ // check for the quantity value is integar
                            $checkCount = true;
                        } else { // if the quantity value is not integar
                            $('.append-here').append('<div class="alert alert-danger text-center">Error The Quantity Must Be Int Value more than 0</div>');
                            return false;
                        }
                    } else { // if the user dont enter value for quantity input
                        $('.append-here').append('<div class="alert alert-danger text-center">Error Please Fill All Fields </div>');
                        $checkCount = false;
                        return false;
                    }
                } else { // if the user dont checked this checkbox
                    $unCheckedCount++;
                }
            });
            if ($checkCount){
                $(this).submit();
            } else if($unCheckedCount == $allCheckBox) { //if the user don't checked any checkbox
                $('.append-here').append('<div class="alert alert-danger text-center">You Must Choose At least One Item</div>');
            }
        }
        return false;
    });
    /************[ make-order validation ]*************/



});