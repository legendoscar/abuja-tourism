<?php require_once 'includes/css-links.php'; ?>

  <body class="inv-body">
    <main id="main" class="position-relative">

        <!-- Invoice -->
        <div class="invoice-box table-responsive">
            <table  >
                <tr class="top">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="title">
                                    <img src="/assets/img/logo/t_logo.png" style="width: 80px; height:auto" alt="">
                                </td>
                                <td>
                                    Invoice #: 25<br>
                                    Generated: February 28, 2021<br>
                                    Due: March 1, 2021 <br>
                                    <span> Status: 
                                        <span class="status status-unpaid">Unpaid</span>
                                    </span>
                                    <span class="d-none">
                                        Status: <span class="status status-paid">Paid</span>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="information">
                    <td colspan="2">
                        <table >
                            <tr>
                                <td class="pb-5">
                                    <span class="ltext">
                                        Imo Tourism , Inc.
                                    </span>
                                    <br>
                                    Owerri, Imo State, Nigeria<br>
                                    <a href="#"  style="color:#666; text-decoration:none">youremail@domain.com</a>
                                    <br>
                                    <a href="#" style="color:#666; text-decoration:none">+234 9032-123456</a>                                
                                </td>
                                <td class="pb-5">
                                    <span class="ltext">
                                        Cynthia E Ngozi
                                    </span>
                                    <br>
                                    <a href="#"  style="color:#666; text-decoration:none">yourmail@domain.com</a>
                                    <br>
                                    <a href="#"  style="color:#666; text-decoration:none">+234-09329-987654</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="heading">
                    <td>
                        Payment Method
                    </td>
                    <td>
                        Check #
                    </td>
                </tr>
                <tr class="details">
                    <td>
                        Visa ending **** 4242
                    </td>
                    <td>
                        Check
                    </td>
                </tr>
                <tr class="heading">
                    <td>
                        Option
                    </td>
                    <td>
                        Details
                    </td>
                </tr>
                <tr class="item">
                    <td>
                        Hotel
                    </td>
                    <td>
                        Hotel Ibis Royale
                    </td>
                </tr>
                <tr class="item">
                    <td>
                        Room Type
                    </td>
                    <td>
                        Standard Family Room &#8358;53,500
                    </td>
                </tr>
                <tr class="item ">
                    <td>
                        Days 
                    </td>
                    <td>
                        6
                    </td>
                </tr>
                <tr class="item ">
                    <td>
                        Persons
                    </td>
                    <td>
                        2
                    </td>
                </tr>
                <tr class="item ">
                    <td>
                        Rooms
                    </td>
                    <td>
                        1
                    </td>
                </tr>
                <tr class="item last">
                    <td>
                        Taxes
                    </td>
                    <td>
                        &#8358;500
                    </td>
                </tr>
                <tr class="total">
                    <td></td>
                    <td style="padding-top:50px;"> 
                        Total: &#8358;63,500
                    </td>
                </tr>
            </table>
            <div class="watermark unpaid">
                <h1>UNPAID</h1>
            </div>
            <div class="watermark paid">
                <h1>PAID</h1>
            </div>
        </div>
        <a href="javascript:window.print()" class="print-button">Print this invoice</a>
        <!-- End Invoice -->
    </main>

    <?php require_once 'includes/scripts.php'; ?>
  </body>
</html>
