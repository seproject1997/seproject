/*
* Expected Marks Calculator
* */

//Expected Marks
var getMarks = function(){
    var t1 = parseFloat($('#cat1').val());
    var t2 = parseFloat($('#cat2').val());
    var aqp = parseFloat($('#da').val());
    var cmp = parseFloat($('#lab').val());

 var total = t1+t2+aqp+cmp;;
 var gr = total/2;
 var grade;
 if(gr>=90)  
grade="A+";
 else if(gr<90 && gr>=85)
grade="A";
 else if(gr<85 && gr>=80)
grade="B+";
 else if(gr<80 && gr>=70)
grade="B";
 else if(gr<70 && gr>=65)
grade="C";
 else if(gr<65 && gr>=60)
grade="D";
 else if(gr<60 && gr>=55)
grade="E";
 else if(gr<55)
grade="F";
 
if(isNaN(t1)||isNaN(t2)||isNaN(aqp)||isNaN(cmp))
{
alert("Insufficiant data!");
}
else{
        $('.alert-marks').show();
        $('#marks').html('YOUR MARKS IS '+total+' OUT OF 200 AND APPROXIMATE GRADE IS '+grade);
   }
}

/*
* Quick CGPA CALCULATOR
* */
$('#submit').click(function(){
    document.getElementById('cgpa-msg').classList.remove("hide");
    // document.getElementById('cbtn').className="btn btn-warning hide";
    var cgpa=parseFloat($('#cgpa').val());
    var gpa=parseFloat($('#gpa').val());
    var c=parseFloat($('#c').val());
    var tc=parseFloat($('#tc').val());

    var f=(((cgpa*tc)+(gpa*c))/(tc+c));
    if(isNaN(f)){
        alert("Insufficient data!");
        f="Unavailable";
    }
    $('.alert-cgpa-msg').show();
    document.getElementById('cgpa-msg').innerHTML="YOUR CGPA IS "+f.toFixed(1);
});

/*
* ALL SEMESTER CGPA CALCULATOR
* */

//All semester cgpa
$('#sem-cgpa-btn').on('click',function(){
    var gpa1, gpa2, gpa3, gpa4, gpa5, gpa6, gpa7, gpa8,fc1=0, fc2=0, fc3=0, fc4=0, fc5=0, fc6=0, fc7=0, fc8=0,fcgpa=0;
    gpa1=$('#gpa1').val();
    fc1 = $('#fc1').val();
    if(gpa1 =='' || fc1===''){
        fc1 = 0;
        gpa1 = 0;
    }
    gpa2=$('#gpa2').val();
    fc2 = $('#fc2').val();
    if(gpa2 =='' || fc2===''){
        fc2 = 0;
        gpa2 = 0;
    }
    gpa3=$('#gpa3').val();
    fc3 = $('#fc3').val();
    if(gpa3 =='' || fc3===''){
        fc3 = 0;
        gpa3 = 0;
    }
    gpa4=$('#gpa4').val();
    fc4 = $('#fc4').val();
    if(gpa4 =='' || fc4===''){
        fc4 = 0;
        gpa4 = 0;
    }
    gpa5=$('#gpa5').val();
    fc5 = $('#fc5').val();
    if(gpa5 =='' || fc5===''){
        fc5 = 0;
        gpa5 = 0;
    }
    gpa6=$('#gpa6').val();
    fc6 = $('#fc6').val();
    if(gpa6 =='' || fc6===''){
        fc6 = 0;
        gpa6 = 0;
    }
    gpa7=$('#gpa7').val();
    fc7 = $('#fc7').val();
    if(gpa7 =='' || fc7===''){
        fc7 = 0;
        gpa7 = 0;
    }
    gpa8=$('#gpa8').val();
    fc8 = $('#fc8').val();
    if(gpa8 =='' || fc8===''){
        fc8 = 0;
        gpa8 = 0;
    }
    fcgpa=((parseFloat(gpa1)*fc1)+(parseFloat(gpa2)*fc2)+(parseFloat(gpa3)*fc3)+(parseFloat(gpa4)*fc4)+(parseFloat(gpa5)*fc5)+(parseFloat(gpa6)*fc6)+(parseFloat(gpa7)*fc7)+(parseFloat(gpa8)*fc8))/(fc1*1+fc2*1+fc3*1+fc4*1+fc5*1+fc6*1+fc7*1+fc8*1);
    if(isNaN(fcgpa)){
        alert("Insufficient Data !!");
    }
    else{
        $('.alert-fcgpa').show();
        $('#fcgpa').html('YOUR CGPA WOULD BE '+fcgpa.toFixed(1));
    }
});

/*
* GPA CALCULATOR
* */
var a1=0,a2=0,a3=0,a4=0,a5=0,a6=0,a7=0,a8=0,a9=0,a10=0;
$('#gbtn6').on('click',function(){
a1=4,a2=3,a3=3,a4=3,a5=3,a6=2,a7=3,a8=1;
 $('.alert-grades').show();
    $('#grades1').html("Compiler Design");
	$('#c1').html("Credits-4");
	$('#c2').html("Credits-3");
	$('#c3').html("Credits-3");
	$('#c4').html("Credits-3");
	$('#c5').html("Credits-3");
	$('#c6').html("Credits-2");
	$('#c7').html("Credits-3");
	$('#c8').html("Credits-1");

	$('#grades2').html("Cryptography");
	$('#grades3').html("Software Engineering");
	$('#grades4').html("Artificial Intelligence");
	$('#grades5').html("Internet Technologies");
	$('#grades6').html("Network Programming");
	$('#grades7').html("Elective");
	$('#grades8').html("ULC");
	

});


$('#gbtn5').on('click',function(){
a1=4,a2=3,a3=3,a4=1,a5=3,a6=4,a7=3,a8=3,a9=5;
 $('.alert-grades').show();
    $('#grades1').html("COA");
	$('#grades2').html("Computer Networks");
	$('#grades3').html("AOA");
	$('#grades4').html("AOA Lab");
	$('#grades5').html("OOAD");
	$('#grades6').html("PPL");
	$('#grades7').html("Computer Graphics");
	$('#grades8').html("Elective");
	$('#grades9').html("Industrial Practice");
	$('#c1').html("Credits-4");
	$('#c2').html("Credits-3");
	$('#c3').html("Credits-3");
	$('#c4').html("Credits-1");
	$('#c5').html("Credits-3");
	$('#c6').html("Credits-4");
	$('#c7').html("Credits-3");
	$('#c8').html("Credits-3");
	$('#c9').html("Credits-5");

});


$('#gbtn4').on('click',function(){
a1=2,a2=3,a3=4,a4=4,a5=4,a6=4,a7=3;
 $('.alert-grades').show();
    $('#grades1').html("PDS");
	$('#grades2').html("Elective");
	$('#grades3').html("Data structure");
	$('#grades4').html("Microprocessor");
	$('#grades5').html("Database System");
	$('#grades6').html("Theory of computation");
	$('#grades7').html("Operating system");
	$('#c1').html("Credits-2");
	$('#c2').html("Credits-3");
	$('#c3').html("Credits-4");
	$('#c4').html("Credits-4");
	$('#c5').html("Credits-4");
	$('#c6').html("Credits-4");
	$('#c7').html("Credits-3");


});


$('#gbtn3').on('click',function(){
a1=3,a2=4,a3=4,a4=4,a5=4,a6=4,a7=3;
 $('.alert-grades').show();
    $('#grades1').html("Environment");
	$('#grades2').html("Complex Variable and Transformation");
	$('#grades3').html("Computer aided design");
	$('#grades4').html("Discreate Mathematics");
	$('#grades5').html("OOP");
	$('#grades6').html("Digital Design");
	$('#grades7').html("LCS");
	$('#c1').html("Credits-3");
	$('#c2').html("Credits-4");
	$('#c3').html("Credits-4");
	$('#c4').html("Credits-4");
	$('#c5').html("Credits-4");
	$('#c6').html("Credits-4");
	$('#c7').html("Credits-3");


});


$('#gbtn2').on('click',function(){
a1=1,a2=3,a3=4,a4=4,a5=2,a6=3,a7=3,a8=4;
 $('.alert-grades').show();
    $('#grades1').html("IUAP");
	$('#grades2').html("Thermodynamics");
	$('#grades3').html("Workshop Practice");
	$('#grades4').html("Engineering maths !!");
	$('#grades5').html("Science LAb");
	$('#grades6').html("TRW");
	$('#grades7').html("Electrical science");
	$('#grades8').html("Computer Programming");
	$('#c1').html("Credits-1");
	$('#c2').html("Credits-3");
	$('#c3').html("Credits-4");
	$('#c4').html("Credits-4");
	$('#c5').html("Credits-2");
	$('#c6').html("Credits-3");
	$('#c7').html("Credits-3");
	$('#c8').html("Credits-4");

});

$('#gbtn1').on('click',function(){
a1=3,a2=4,a3=4,a4=3,a5=4,a6=3,a7=4;
 $('.alert-grades').show();
    $('#grades1').html("Chemistry");
	$('#grades2').html(" Engineering Graphics");
	$('#grades3').html("Maths");
	$('#grades4').html("Physics");
	$('#grades5').html("English");
	$('#grades6').html("Biology");
	$('#grades7').html("Probablity and statistics");
	$('#c1').html("Credits-3");
	$('#c2').html("Credits-4");
	$('#c3').html("Credits-4");
	$('#c4').html("Credits-3");
	$('#c5').html("Credits-4");
	$('#c6').html("Credits-3");
	$('#c7').html("Credits-4");
	

});



$('#gbtn').on('click',function(){
    var g1=0,g2=0,g3=0,g4=0,g5=0,g6=0,g7=0,g8=0,g9=0,g10=0,c1=0,c2=0,c3=0,c4=0,c5=0,c6=0,c7=0,c8=0,c9=0,c10=0,sum=0,gpa=0;
    g1=parseInt($('#g1').val()),g2=parseInt($('#g2').val()),g3=parseInt($('#g3').val()),g4=parseInt($('#g4').val()),g5=parseInt($('#g5').val()),g6=parseInt($('#g6').val()),g7=parseInt($('#g7').val()),g8=parseInt($('#g8').val()),g9=parseInt($('#g9').val()),g10=parseInt($('#g10').val()),c1=parseInt($('#c1').val()),c2=parseInt($('#c2').val()),c3=parseInt($('#c3').val()),c4=parseInt($('#c4').val()),c5=parseInt($('#c5').val()),c6=parseInt($('#c6').val()),c7=parseInt($('#c7').val()),c8=parseInt($('#c8').val()),c9=parseInt($('#c9').val()),c10=parseInt($('#c10').val());
    gpa=(a1*g1+a2*g2+a3*g3+a4*g4+a5*g5+a6*g6+a7*g7+a8*g8+a9*g9+a10*g10)/(a1+a2+a3+a4+a5+a6+a7+a8+a9+a10);

    if(isNaN(gpa)){
        alert("Insufficient data!");
        gpa="Unavailable";
    }
    $('.alert-grades').show();
    $('#grades').html("YOUR GPA IS "+gpa.toFixed(1));
    document.getElementById('reset').classList.remove("hide");
});

function clearAll(){
    $('#g1').val('0');$('#g2').val('0');$('#g3').val('0');$('#g4').val('0');$('#g5').val('0');$('#g6').val('0');$('#g7').val('0');$('#g8').val('0');$('#g9').val('0');$('#g10').val('0');
    $('#c1').val('0');$('#c2').val('0');$('#c3').val('0');$('#c4').val('0');$('#c5').val('0');$('#c6').val('0');$('#c7').val('0');$('#c8').val('0');$('#c9').val('0');$('#c10').val('0');
}

/*
* VALIDATION
* */

$('.cgpa-input').on('keyup',function(){
    var input=document.getElementById(this.id).value;
    if(!input==''){
        var re=/^\d+\.?\d{0,2}$/;
        if (!(re.test(input))){
            alert("Please enter a valid data.");
            $(this).val('');
        }
    }
    if((input>10 || input<0) && this.id==='gpa'){
        alert('Your GPA should be between 0 and 10 !');
        $(this).val('');
    }
    else if((input>10 || input<0) && this.id==='cgpa'){
        alert('Your CGPA should be between 0 and 10 !');
        $(this).val('');
    }
    else if((input>28 || input<0) && this.id==='c'){
        alert('Your Credits should be between 16 and 28 !');
        $(this).val('');
    }
    else if((input>200 || input<0) && this.id==='tc'){
        alert('Your Credits should be between 0 and 160 !');
        $(this).val('');
    }
});
$('.form-control').on('keyup',function(){
    var input=document.getElementById(this.id).value;
    if(!input==''){
        var re=/^\d+\.?\d{0,2}$/;
        if (!(re.test(input))){
            alert("Please enter a valid data.");
            $(this).val('');
        }
    }
    if((input>10 || input<0) && (this.id==='gpa1' || this.id==='gpa2' || this.id==='gpa3' || this.id==='gpa4' || this.id==='gpa5' || this.id==='gpa6' || this.id==='gpa7' || this.id==='gpa8')){
        alert('Your GPA should be between 0 and 10 !');
        $(this).val('');
    }
    else if((input>40 || input<0) && (this.id==='cat1' || this.id==='cat2')){
        alert('Your Test1 and Test2 marks should be between 0 and 40 !');
        $(this).val('');
    }
    else if((input>40 || input<0) && (this.id==='da')){
        alert('Your Assigment/Quiz/Project marks should be between 0 and 40 !');
        $(this).val('');
    }
    else if((input>80 || input<0) && (this.id==='lab')){
        alert('Your Comprehensive marks should be between 0 and 80 !');
        $(this).val('');
    }
    else if((input>27 || input<0) && (this.id==='fc1' || this.id==='fc2' || this.id==='fc3' || this.id==='fc4' || this.id==='fc5' || this.id==='fc6' || this.id==='fc7' || this.id==='fc8')){
        alert('Your Credits should be between 16 and 27 !');
        $(this).val('');
    }
});

//Changing active link
var changeActiveLink = function(x){
    $('li').removeClass('active');
    className = '.link'+x;
    $(className).addClass('active');
    $('.navbar-collapse').removeClass('show');
    $('.navbar-toggler').attr('aria-expanded',false);
}
//closing navbar on click
//HIDES ALL THE ALERT BOX
$('.alert').hide();

// $('#about-btn').on('click',function(){
//     $('#about').fadeToggle('slow');
// });
// $('#close-btn').on('click',function(){
//     $('#about').css({
//         "display":" none"
//     });
// });
// $('#team-view').on('click',function(){
//     $('#team-data').fadeToggle('slow');
// });

// $('#cbtn').click(function(){
//     document.getElementById('reset').classList.remove("hide");
//     document.getElementById('cgpa-box').classList.remove("hide");
//     document.getElementById('cbtn').className="hide";
//     // $('#gbtn').attr('disabled','disabled');
//     $('form > input').on('keyup',function(){
//     var empty=false;
//     $('form > input').each(function(){
//         if($(this).val() == '')
//             empty=true;
//     if(empty)
//         $('#submit').attr('disabled','disabled');
//     else
//         $('#submit').removeAttr('disabled');
//     });
// });
