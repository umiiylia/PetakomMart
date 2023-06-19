<main id="main" class="main-site">

<!-- Modal Checkout-->
    <div class="modal faded" id="checkoutModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="checkoutModalLabel"></h1>
                </div>
                    <table style="width:100%">
                        <style>
                          h5 {text-align: center;}
                          h1 {text-align: center;}
                          th{text-align: center;}
                          img{text-align: center;}
                        </style>
                         <tr>
                          <th>
                           <!-- Profile Details  -->
                            <div class="modal-body">
                             <button class="banner-countdown" href="#" data-toggle="modal" data-target="#cashModal" data-dismiss="modal">
                             <h5><b>Pay via</b></h5>
                             <h1>Cash <br>
                             </h1>
                             <img
                                            src="https://logodix.com/logo/1099301.jpg"
                                            alt="cash" style="width:130px;height:100px;">
                            </div>
                          </th>
                          <th>
                           <!-- Profile Details  -->
                            <div class="modal-body">
                            <button class="banner-countdown" href="#" data-toggle="modal" data-target="#qrModal" data-dismiss="modal">
                             <h5><b>Pay via</b></h5>
                             <h1>QR Pay <br>
                             </h1>
                             <img
                                            src="https://www.agrobank.com.my/wp-content/uploads/2021/06/DuitNow-QR-Logo_FA2.png"
                                            alt="QR" style="width:110px;height:100px;">
                            </div>
                          </th>
                         </tr>
                     </table>
            </div>
        </div>
    </div>
    
<!-- Modal QR-->
<div class="modal faded" id="qrModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="qrModalLabel"></h1>
                </div>
                <div class="modal-body">
                    <!-- Profile with Image  -->
                    <div class="modal-body">
                        <div class="banner-countdown">
                            <table>
                             <style>
                               img {text-align: center;}
                               h4 {text-align: center;}
                               tr {text-align: center;}
                               td {text-align: center;}
                               .wrap-countdown{text-align: center;}
                             </style>
                                <tr>
                                        <h4><b>Payment in progress</b></h4>
                                </tr>
                                <br>
                                <tr>
                                <div class="wrap-countdown mercado-countdown" data-expire="2023/12/12 12:34:56"></div>
                                </tr>
                                <br>
                                <tr>
                                    <center><img
                                            src="https://www.iium.edu.my/media/68540/3.png"
                                            alt="qrcode" style="width:300px;height:400px;"></center>
                                </tr>
                                <br><br>
                                <tr>
                                    <td>
                                      <button class="w3-button w3-red" data-dismiss="modal">Close</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
