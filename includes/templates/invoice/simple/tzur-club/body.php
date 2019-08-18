<?php
/**
 * PDF invoice template body.
 *
 * This template can be overridden by copying it to youruploadsfolder/woocommerce-pdf-invoices/templates/invoice/simple/yourtemplatename/body.php.
 *
 * HOWEVER, on occasion WooCommerce PDF Invoices will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @author  Bas Elbers
 * @package WooCommerce_PDF_Invoices/Templates
 * @version 0.0.1
 */

$templater = WPI()->templater();
$order = $templater->order;
$invoice = $templater->invoice;
$line_items = $order->get_items('line_item');
$formatted_shipping_address = $order->get_formatted_shipping_address();
$formatted_billing_address = $order->get_formatted_billing_address();
$columns = $invoice->get_columns();
$color = $templater->get_option('bewpi_color_theme');
$terms = $templater->get_option('bewpi_terms');

// custom data

//$passport_number = $invoice->passport_number;

//echo $invoice;

//$passport_number = $invoice->get_passport_number();
//echo $passport_number;
$passport_number = '1111111';
?>

2222


<div class="pdfPage"
     style="transition: border-color 200ms ease-in-out 0s; width: 1125px; height: 796px; background-color: white; display: inline-block; border-color: rgb(175, 175, 175);">
  <div class="pdfHeader" style="width: 1123px; position: relative; height: 100px;">
    <div tabindex="1" class="PDFElement" id="pdfField_11"
         style="left: 442px; top: 13.5875px; z-index: 500; position: absolute; font-size: 14px; width: 270px; height: 100px;">
      <div class="elementContent"><img style="width:270px;height: 100px;" class="itemImage" draggable="false"
                                       src="https://teufanevona.co.il/wp-content/uploads/2019/04/logoorange2.png"></div>
    </div>
  </div>
  <div class="pdfContent" style="width: 1123px; position: relative; height: 594px;">
    <div tabindex="1" class="PDFElement" id="pdfField_9"
         style="left: 327px; top: 29.5625px; z-index: 500; position: absolute; font-size: 14px; width: 500px;">
      <div class="elementContent"><p style="vertical-align: top;"></p>
        <p style="direction: ltr; text-align: center;"><span style="font-size: 18px; white-space: pre-wrap;">Thank you for joining Tzur'z Club!<br>In order to enjoy the benefits of the various<br>businesses, we recommend that you keep this<br>email in your favorites and display it when <br>necessary in the various businesses that give <br>benefits to club members!</span>
        </p>
        <p></p></div>
    </div>
    <div tabindex="1" class="PDFElement" id="pdfField_5"
         style="left: 273px; top: 196px; z-index: 500; position: absolute; font-size: 14px; width: 600px; height: 400px;">
      <div class="elementContent"><img style="width:600px;height: 400px;" class="itemImage" draggable="false"
                                       src="https://teufanevona.co.il/wp-content/uploads/2019/06/Untitled-design.jpg">
      </div>
    </div>
    <div tabindex="1" class="PDFElement" id="pdfField_4"
         style="left: 470px; top: 245.588px; z-index: 500; position: absolute; font-size: 14px; width: 200px; height: 75px;">
      <div class="elementContent"><img style="width:200px;height: 75px;" class="itemImage" draggable="false"
                                       src="https://teufanevona.co.il/wp-content/uploads/2019/05/Zurs-Club-2.png"></div>
    </div>
    <div tabindex="1" class="PDFElement" id="pdfField_8"
         style="left: 420px; top: 324.6px; z-index: 500; position: absolute; font-size: 14px; width: 300px;">
      <div class="elementContent"><p style="vertical-align: top;"></p>
        <p style="text-align: center;"><strong>Membership Card</strong></p>
        <p></p></div>
    </div>
    <div tabindex="1" class="PDFElement" id="pdfField_7"
         style="left: 420px; top: 364px; z-index: 500; position: absolute; font-size: 14px; width: 300px; height: 55px; overflow: hidden;">
      <div class="elementContent">
        <table style="width:100%;">
          <tbody>
          <tr>
            <td style="vertical-align: top;"><p class="fieldLabel" style="margin:0;padding:0;">Name:</p></td>
          </tr>
          <tr>
            <td class="fieldValueContainer" style="vertical-align: top;"><p class="fieldValue"
                                                                            style="text-align: left;margin:0;padding:0;">
                Customer Name</p></td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div tabindex="1" class="PDFElement" id="pdfField_14"
         style="left: 418px; top: 432.6px; z-index: 500; position: absolute; font-size: 14px; width: 300px;">
      <div class="elementContent"><p style="vertical-align: top;"></p>
        <p style="text-align: center;"><strong>Passport Number:</strong> <?php echo $passport_number; ?></p>
        <p></p></div>
    </div>
    <div tabindex="1" class="PDFElement" id="pdfField_13"
         style="left: 502px; top: 470px; z-index: 500; position: absolute; font-size: 14px; width: 300px; height: 34px;">
      <div class="elementContent"><p style="vertical-align: top;">#מספר דרכון</p></div>
    </div>
    <div tabindex="1" class="PDFElement" id="pdfField_6"
         style="left: 420px; top: 497.6px; z-index: 500; position: absolute; font-size: 14px; width: 300px; height: 59px; overflow: hidden;">
      <div class="elementContent">
        <table style="width:100%;">
          <tbody>
          <tr>
            <td style="vertical-align: top;"><p class="fieldLabel" style="margin:0;padding:0;">Date of Issue:</p></td>
          </tr>
          <tr>
            <td class="fieldValueContainer" style="vertical-align: top;"><p class="fieldValue"
                                                                            style="text-align: left;margin:0;padding:0;">
                10/08/19</p></td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="pdfFooter" style="width: 1123px; position: relative; height: 100px;"></div>
</div>
