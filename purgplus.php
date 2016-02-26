<?php
function alertSuccess( $alertMsg = "<strong>Record Successfully Submitted</strong>", $alertType = "success")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	text-align: center;';
    echo '	font-size: 20px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: darkseagreen;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertUpdateSuccess( $alertMsg = "<strong>Record Successfully Updated</strong>", $alertType = "success", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: darkseagreen;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertSuccess_business_RecordUpdate( $alertMsg = "<strong>Business Record Successfully Updated</strong>", $alertType = "success")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: darkseagreen;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}

function alertDangerSpecifyTitle( $alertMsg = "<strong>Error:: Please specify the title of the accessor</strong>", $alertType = "error")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertDangerContact( $alertMsg = "<strong>Warning..!</strong><br/>Contact number must be digits only", $alertType = "error")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertDanger_OnlyDigits( $alertMsg = "<strong>Warning..!</strong><br/>Quantity must be digits only", $alertType = "error")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertDanger_OnlyDigitsPrice( $alertMsg = "<strong>Warning..!</strong><br/>Price must be digits only", $alertType = "error")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertDanger_student_level( $alertMsg = "<strong>Warning..!</strong><br/>You did not select student level", $alertType = "error", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertDanger_staff_sex( $alertMsg = "<strong>Warning..!</strong><br/>You did not select staff gender", $alertType = "error")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertDangerMobile( $alertMsg = "<strong>Warning..!</strong><br/>Only numbers are allowed for mobile number field", $alertType = "error")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertDangerWorkingDays( $alertMsg = "<strong>Warning..!</strong><br/>You did not choose your business working days", $alertType = "error", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertDangerPlan( $alertMsg = "<strong>Warning..!</strong><br/>You did not choose your choice of plan you would wish th enroll on", $alertType = "error", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertDangerServer( $alertMsg = "<strong>Sorry..!</strong><br/>Record already exist", $alertType = "error", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertDangerPassword( $alertMsg = "<strong>Sorry..!</strong><br/>Password already exist", $alertType = "error", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertUpdateErr( $alertMsg = "<strong>Sorry..!</strong><br/>Record does not exist.", $alertType = "error", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}function alertDangerServer1( $alertMsg = "<strong>Sorry..!</strong><br/>Invalid department Id", $alertType = "error", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertDangerServer2( $alertMsg = "<strong>Sorry..!</strong><br/>Invalid supplier Id", $alertType = "error", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertDangerContact1( $alertMsg = "<strong>Sorry..!</strong><br/>Mobile contact number already exist", $alertType = "error", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}

function alertDangerEmail( $alertMsg = "<strong>Sorry..!</strong><br/>E-mail already exist", $alertType = "error", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertNon_existing_data( $alertMsg = "<strong>Sorry..!</strong><br/>Invalid student Id; Student must be registered, contact the system's administrator", $alertType = "error", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertLoginError( $alertMsg = "<strong>Sorry..!</strong><br/>Invalid login parameters", $alertType = "error", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertDangerUpdate( $alertMsg = "No changes were made", $alertType = "error", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertDangerEmptyFields( $alertMsg = "<strong>Sorry..!</strong><br/>All Fields are Required to be filled", $alertType = "error", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertSMS_Success( $alertMsg = "<strong>Congrats..!</strong><br/>SMS delivered successfully", $alertType = "error", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: darkseagreen;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertSMS_Error( $alertMsg = "<strong>Sorry..!</strong><br/>The SMS was not delivered", $alertType = "error", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertVote_Error( $alertMsg = "<strong>Sorry..!</strong><br/>The voucher code has been used already by the same user or someone else", $alertType = "error", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertVoteCode_Error( $alertMsg = "<strong>Sorry..!</strong><br/>The voucher code has been used already", $alertType = "error", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertVoteCount_Error( $alertMsg = "<strong>Sorry..!</strong><br/>You have exceeded your voting limit", $alertType = "error", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}
function alertVoucherCount_Error( $alertMsg = "<strong>Sorry..!</strong><br/>Voucher code has already been sent to subscriber", $alertType = "error", $url = "")
{
    echo '<script type="text/javascript">';
    echo '$(document).ready(function(){';
    echo '  $("#myAlert").delay(1000).addClass("in").fadeOut(5000);';
    echo '	$(".close").click(function(){';
    echo '		$("#myAlert").hide();';
    echo '	});';
    echo '});';
    echo '</script>';

    echo '<style type="text/css">';
    echo '.bs-alert{';
    echo '	margin: 5px;';
    echo '	color: #2c2c2c;';
    echo '	text-align: center;';
    echo '	font-size: 15px;';
    echo '}';
    echo '#myAlert{';
    echo '	background-color: #ef7b7b;';
    echo '}';
    echo '</style>';
    echo '<div class="bs-alert">';
    echo '<div class="alert alert-' . $alertType . '" id="myAlert">';
    echo '  ' . $alertMsg . ' ';
    echo '</div>';
    echo '</div>';
}