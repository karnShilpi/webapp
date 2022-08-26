<!DOCTYPE html>
<html>
<head>
<title>Facebook Login JavaScript Example</title>
<meta charset="UTF-8">
</head>
<body>
@if($task =='get')
<div class="row">

                                                    <div class="col-md-12 margin-top-5">
                                                        <div class="newcardstyle padding-LR-5 passwordinput" style="margin-bottom: 5px !important;">
                                                            <div class="form-group padding-0 label-floating is-empty">
                                                                <label for="i2" class="control-label form_label_color">Stock Symbol :</label>
                                                                <input class="form-control" type="text" autocomplete="off" placeholder="" name="stock" id="stock_sym" value="" />
                                                                <div class="kt-portlet__foot">
                                    <div class="kt-form__actions text-center">
                                        <button type="submit" class="btn btn-theme" onclick="getStockPrice()" data-is-update="">Get Price</button>
                                    </div>
                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    @endif
@if($task =='view')
<?php //print_r($output);?>
<table style="border:1px solid gray">
    <tr style="border:1px solid gray">
        <td style="border:1px solid gray">Symbol</td>
        <td style="border:1px solid gray">High</td>
        <td style="border:1px solid gray">Low</td>
        <td style="border:1px solid gray">Price</td>
    </tr>
    <tr style="border:1px solid gray">
        <td style="border:1px solid gray">{{ @$output['symbol']}}</td>
        <td style="border:1px solid gray">{{ @$output['high']}}</td>
        <td style="border:1px solid gray">{{ @$output['low']}}</td>
        <td style="border:1px solid gray">{{ @$output['price']}}</td>
    </tr>
</table>
@endif
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/material.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>


<script>
function getStockPrice(){
    
        console.log('in getStockPrice');
        $('#stock_sym').prop('disabled',true);
        let stock_ym=$('#stock_sym').val();
      if(stock_ym==''){
        alert('Please Enter stock Symbol');
return;
      }
        $.ajax({
            type: 'get',
            url: 'https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol='+(stock_ym?stock_ym:'')+'&apikey=0O18XUJW9P8QVGQJ',
           
            async: false,
            success: function (data) {
                $('#stock_sym').prop('disabled',false);
             console.log(typeof(data));
             console.log(data['Global Quote']);
             if(jQuery.isEmptyObject(data['Global Quote'])){
alert('Please Enter Another Code');
$('#stock_sym').val();
             }else{
                let string=btoa(JSON.stringify(data['Global Quote']));
                console.log(string);
               window.location.replace("/storeprice/"+string);
             }
              
             
            

            },
            error: function (data) {
              console.log(data);
              alert('Some Error Occur')
            },
        });
    }
</script>
                                                  </body>
</html>
