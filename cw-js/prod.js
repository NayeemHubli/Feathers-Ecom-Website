

var product_section = angular.module('product_module',[]);

product_section.controller('all_product_list_cont',['$scope','$http',function($scope, $http){

    $http.get('cw-BLL/get_all_product.php')
        .success(function(response){
            $scope.all_chicken_variety = response.show_all_product_list;
        });
    //declare javascript function name
    $scope.place_order = place_order;
}]);

/*ORDER PLACE SECTION=============================================================================*/

function place_order(get_chk_variety_id){

    var data_val = 'send_variety_id='+get_chk_variety_id;
    $('#loaderModal').modal('show');
    $.ajax({
        type: "POST",
        url: "cw-BLL/ax_get_chicken_variety.php",
        //dataType : 'json',
        data: data_val,
        error: function (objAJAXRequest, strError) {
            console.log("Error! Type: " + strError + ". Try later.");
        },
        timeout: 6000000, // sets timeout to 3 seconds
        success: function (data) {
            var getData = data.split('----');
            $('#loaderModal').modal('hide');
            document.getElementById('chk_variety_id').value =getData[0];
            document.getElementById('chk_variety_name').innerHTML =getData[1];
            document.getElementById('chk_price').innerHTML =getData[2];
            document.getElementById('txt_chk_variety_name').value =getData[1];
            document.getElementById('txt_chk_price').value =getData[2];
            $('#BuyChickenModal').modal('show');
        }
    });
}
/*ORDER PLACE CALCULATION=============================================================================*/

function CalculateChicken(){
    var select = document.getElementById('address_type');
    var address_type = select.options[select.selectedIndex].value;
    var bool = EmptyValidationForBuyChicks();
    if (bool){
        $('#loaderModal').modal('show');
        $('#BuyChickenModal').modal('hide');
        var get_fname, get_mobile, get_qty, get_chk_id, get_chk_name, get_chk_price, total_amt, get_cust_id;
        get_chk_id =  document.getElementById('chk_variety_id').value;
        get_chk_name =  document.getElementById('txt_chk_variety_name').value;
        get_chk_price =  document.getElementById('txt_chk_price').value;
        get_cust_id =  document.getElementById('txt_cust_id').value;

        get_fname =  document.getElementById('txt_fname').value;
        get_mobile =  document.getElementById('txt_mob').value;
        get_qty =  document.getElementById('txt_qty').value;

        total_amt = get_qty * get_chk_price;

        var data_val = 'set_fname='+get_fname+'&set_mobile='+get_mobile+'&set_qty='+get_qty+
            '&set_chk_id='+get_chk_id+'&set_chk_name='+get_chk_name+'&set_chk_price='+get_chk_price+
            '&set_total_amt='+total_amt+'&set_address_type='+address_type+'&set_cust_id='+get_cust_id+'&action_type=save';

            console.log('>>', data_val);
        $.ajax({
            type: "POST",
            url: "cw-BLL/ax_buy_chicken.php",
            //dataType : 'json',
            data: data_val,
            error: function (objAJAXRequest, strError) {
                console.log("Error! Type: " + strError + ". Try later.");
            },
            timeout: 6000000, // sets timeout to 3 seconds
            success: function (data) {
                $('#loaderModal').modal('hide');
                // document.getElementById('txt_fname').value = "";
                // document.getElementById('txt_mob').value = "";
                document.getElementById('txt_qty').value = "";
                $('#SuccessfullyBuyChicken').modal('show');
                document.getElementById('exitBuyChicken').innerHTML = data;

            }
        });
    }
}

/*chick validation when buy chicken*/
function EmptyValidationForBuyChicks(){
    var userMobileNumber = document.getElementById('txt_mob').value;
    if(document.getElementById('txt_qty').value == '' | document.getElementById('txt_qty').value == 0 ){
        pass_msg('warning',global_text[0],'Alert');//call function
        document.getElementById('txt_qty').focus();
        return false;
    }else if(document.getElementById('txt_fname').value == '' | document.getElementById('txt_fname').value.length < 3 ){
        pass_msg('warning',global_text[1],'Alert');//call function
        document.getElementById('txt_fname').focus();
        return false;
    }else if(userMobileNumber == ''){
        pass_msg('warning',global_text[2],'Alert');//call function
        document.getElementById('txt_mob').focus();
        return false;
    }else if(userMobileNumber.length < 10 ){
        pass_msg('warning','Mobile number must be in 10 digits','Alert');//call function
        document.getElementById('txt_mob').focus();
        return false;
    }
    return true;
}

