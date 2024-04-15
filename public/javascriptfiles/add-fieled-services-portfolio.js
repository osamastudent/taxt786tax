
function handleCheckboxChange(checkboxId, inputId, inputName) {
        let checkbox = document.getElementById(checkboxId);
        let input = document.getElementById(inputId);

        checkbox.addEventListener("click", function() {
            var isChecked = checkbox.checked;

            if (isChecked) {
                input.classList.remove("d-none");
                input.setAttribute("name", inputName);
            } else {
                input.classList.add("d-none");
                input.removeAttribute("name");
            }
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        handleCheckboxChange("textThreeCheckbox", "text_three_input", "text_three");
        handleCheckboxChange("textFourCheckbox", "text_four_input", "text_four");
        handleCheckboxChange("textFiveCheckbox", "text_five_input", "text_five");
        handleCheckboxChange("textSixCheckbox", "text_six_input", "text_six");
        handleCheckboxChange("textSevenCheckbox", "text_seven_input", "text_seven");
        handleCheckboxChange("textEightCheckbox", "text_eight_input", "text_eight");
        handleCheckboxChange("textNineCheckbox", "text_nine_input", "text_nine");
        handleCheckboxChange("textTenCheckbox", "text_ten_input", "text_ten");
        handleCheckboxChange("textElevenCheckbox", "text_eleven_input", "text_eleven");
        handleCheckboxChange("textTwelveCheckbox", "text_twelve_input", "text_twelve");
        handleCheckboxChange("textThirteenCheckbox", "text_thirteen_input", "text_thirteen");
        handleCheckboxChange("textFourteenCheckbox", "text_fourteen_input", "text_fourteen");
        handleCheckboxChange("textfifthteenCheckbox", "text_fifthteen_input", "text_fifthteen");
        handleCheckboxChange("textsixteenCheckbox", "text_sixteen_input", "text_sixteen");
        handleCheckboxChange("textSeventeenCheckbox", "text_seventeen_input", "text_seventeen");
        handleCheckboxChange("textEighteenteenCheckbox", "text_eighteen_input", "text_eighteen");
        handleCheckboxChange("textNineteenCheckbox", "text_nineteen_input", "text_nineteen");
        handleCheckboxChange("textTwentyCheckbox", "text_twenty_input", "text_twenty");
   
    });






    
// let textThreeCheckbox = document.getElementById("textThreeCheckbox");
// let text_three_input = document.getElementById("text_three_input");

// textThreeCheckbox.addEventListener("click", function() {
//     var x = document.getElementById("textThreeCheckbox").checked;

//     if (x === true) {
//         text_three_input.classList.remove("d-none");
//         var setNameAtt = text_three_input.setAttribute("name", "text_three");


//     } else {
//         text_three_input.classList.add("d-none");
//         var setNameAtt = text_three_input.removeAttribute("name");


//     }
// });


// let textFourCheckbox = document.getElementById("textFourCheckbox");
// let text_four_input = document.getElementById("text_four_input");

// textFourCheckbox.addEventListener("click", function() {
//     var x = document.getElementById("textFourCheckbox").checked;

//     if (x === true) {
//         text_four_input.classList.remove("d-none");
//         var setNameAtt = text_four_input.setAttribute("name", "text_four");


//     } else {
//         text_four_input.classList.add("d-none");
//         var setNameAtt = text_four_input.removeAttribute("name");


//     }
// });


// let textFiveCheckbox = document.getElementById("textFiveCheckbox");
// let text_five_input = document.getElementById("text_five_input");

// textFiveCheckbox.addEventListener("click", function() {
//     var x = document.getElementById("textFiveCheckbox").checked;

//     if (x === true) {
//         text_five_input.classList.remove("d-none");
//         var setNameAtt = text_five_input.setAttribute("name", "text_five");


//     } else {
//         text_five_input.classList.add("d-none");
//         var setNameAtt = text_five_input.removeAttribute("name");


//     }
// });


// let textSixCheckbox = document.getElementById("textSixCheckbox");
// let text_six_input = document.getElementById("text_six_input");

// textSixCheckbox.addEventListener("click", function() {
//     var x = document.getElementById("textSixCheckbox").checked;

//     if (x === true) {
//         text_six_input.classList.remove("d-none");
//         var setNameAtt = text_six_input.setAttribute("name", "text_six");


//     } else {
//         text_six_input.classList.add("d-none");
//         var setNameAtt = text_six_input.removeAttribute("name");


//     }
// });

// let textSevenCheckbox = document.getElementById("textSevenCheckbox");
// let text_seven_input = document.getElementById("text_seven_input");

// textSevenCheckbox.addEventListener("click", function() {
//     var x = document.getElementById("textSevenCheckbox").checked;

//     if (x === true) {
//         text_seven_input.classList.remove("d-none");
//         var setNameAtt = text_seven_input.setAttribute("name", "text_seven");


//     } else {
//         text_seven_input.classList.add("d-none");
//         var setNameAtt = text_seven_input.removeAttribute("name");


//     }
// });

// let textEightCheckbox = document.getElementById("textEightCheckbox");
// let text_eight_input = document.getElementById("text_eight_input");

// textEightCheckbox.addEventListener("click", function() {
//     var x = document.getElementById("textEightCheckbox").checked;

//     if (x === true) {
//         text_eight_input.classList.remove("d-none");
//         var setNameAtt = text_eight_input.setAttribute("name", "text_nine");


//     } else {
//         text_eight_input.classList.add("d-none");
//         var setNameAtt = text_eight_input.removeAttribute("name");


//     }
// });
// let textNineCheckbox = document.getElementById("textNineCheckbox");
// let text_nine_input = document.getElementById("text_nine_input");

// textNineCheckbox.addEventListener("click", function() {
//     var x = document.getElementById("textNineCheckbox").checked;

//     if (x === true) {
//         text_nine_input.classList.remove("d-none");
//         var setNameAtt = text_nine_input.setAttribute("name", "text_nine");


//     } else {
//         text_nine_input.classList.add("d-none");
//         var setNameAtt = text_nine_input.removeAttribute("name");


//     }
// });
// let textTenCheckbox = document.getElementById("textTenCheckbox");
// let text_ten_input = document.getElementById("text_ten_input");

// textTenCheckbox.addEventListener("click", function() {
//     var x = document.getElementById("textTenCheckbox").checked;

//     if (x === true) {
//         text_ten_input.classList.remove("d-none");
//         var setNameAtt = text_ten_input.setAttribute("name", "text_ten");


//     } else {
//         text_ten_input.classList.add("d-none");
//         var setNameAtt = text_ten_input.removeAttribute("name");


//     }
// });
// let textElevenCheckbox = document.getElementById("textElevenCheckbox");
// let text_eleven_input = document.getElementById("text_eleven_input");

// textElevenCheckbox.addEventListener("click", function() {
//     var x = document.getElementById("textElevenCheckbox").checked;

//     if (x === true) {
//         text_eleven_input.classList.remove("d-none");
//         var setNameAtt = text_eleven_input.setAttribute("name", "text_eleven");


//     } else {
//         text_eleven_input.classList.add("d-none");
//         var setNameAtt = text_eleven_input.removeAttribute("name");


//     }
// });
// let textTwelveCheckbox = document.getElementById("textTwelveCheckbox");
// let text_twelve_input = document.getElementById("text_twelve_input");

// textTwelveCheckbox.addEventListener("click", function() {
//     var x = document.getElementById("textTwelveCheckbox").checked;

//     if (x === true) {
//         text_twelve_input.classList.remove("d-none");
//         var setNameAtt = text_twelve_input.setAttribute("name", "text_twelve");


//     } else {
//         text_twelve_input.classList.add("d-none");
//         var setNameAtt = text_twelve_input.removeAttribute("name");


//     }
// });
// let textThirteenCheckbox = document.getElementById("textThirteenCheckbox");
// let text_thirteen_input = document.getElementById("text_thirteen_input");

// textThirteenCheckbox.addEventListener("click", function() {
//     var x = document.getElementById("textThirteenCheckbox").checked;

//     if (x === true) {
//         text_thirteen_input.classList.remove("d-none");
//         var setNameAtt = text_thirteen_input.setAttribute("name", "text_thirteen");


//     } else {
//         text_thirteen_input.classList.add("d-none");
//         var setNameAtt = text_thirteen_input.removeAttribute("name");


//     }
// });
// let textFourteenCheckbox = document.getElementById("textFourteenCheckbox");
// let text_fourteen_input = document.getElementById("text_fourteen_input");

// textFourteenCheckbox.addEventListener("click", function() {
//     var x = document.getElementById("textFourteenCheckbox").checked;

//     if (x === true) {
//         text_fourteen_input.classList.remove("d-none");
//         var setNameAtt = text_fourteen_input.setAttribute("name", "text_fourteen");


//     } else {
//         text_fourteen_input.classList.add("d-none");
//         var setNameAtt = text_fourteen_input.removeAttribute("name");


//     }
// });

// let textfifthteenCheckbox = document.getElementById("textfifthteenCheckbox");
// let text_fifthteen_input = document.getElementById("text_fifthteen_input");

// textfifthteenCheckbox.addEventListener("click", function() {
//     var x = document.getElementById("textfifthteenCheckbox").checked;

//     if (x === true) {
//         text_fifthteen_input.classList.remove("d-none");
//         var setNameAtt = text_fifthteen_input.setAttribute("name", "text_fifthteen");


//     } else {
//         text_fifthteen_input.classList.add("d-none");
//         var setNameAtt = text_fifthteen_input.removeAttribute("name");


//     }
// });
// let textsixteenCheckbox = document.getElementById("textsixteenCheckbox");
// let text_sixteen_input = document.getElementById("text_sixteen_input");

// textsixteenCheckbox.addEventListener("click", function() {
//     var x = document.getElementById("textsixteenCheckbox").checked;

//     if (x === true) {
//         text_sixteen_input.classList.remove("d-none");
//         var setNameAtt = text_sixteen_input.setAttribute("name", "text_sixteen");


//     } else {
//         text_sixteen_input.classList.add("d-none");
//         var setNameAtt = text_sixteen_input.removeAttribute("name");


//     }
// });

// document.addEventListener('DOMContentLoaded', function() {
//             let textSeventeenCheckbox = document.getElementById("textSeventeenCheckbox");
//             let text_seventeen_input = document.getElementById("text_seventeen_input");

//             textSeventeenCheckbox.addEventListener("click", function() {
//                 var x = document.getElementById("textSeventeenCheckbox").checked;

//                 if (x === true) {
//                     text_seventeen_input.classList.remove("d-none");
//                     var setNameAtt = text_seventeen_input.setAttribute("name", "text_seventeen");


//                 } else {
//                     text_seventeen_input.classList.add("d-none");
//                     var setNameAtt = text_seventeen_input.removeAttribute("name");


//                 }
//             });


//             let textEighteenteenCheckbox = document.getElementById("textEighteenteenCheckbox");
//                         let text_eighteen_input = document.getElementById("text_eighteen_input");

//                         textEighteenteenCheckbox.addEventListener("click", function() {
//                             var x = document.getElementById("textEighteenteenCheckbox").checked;

//                             if (x === true) {
//                                 text_eighteen_input.classList.remove("d-none");
//                                 var setNameAtt = text_eighteen_input.setAttribute("name", "text_eighteen");


//                             } else {
//                                 text_eighteen_input.classList.add("d-none");
//                                 var setNameAtt = text_eighteen_input.removeAttribute("name");


//                             }
//                         });

//                         let textNineteenCheckbox = document.getElementById("textNineteenCheckbox");
//                                     let text_nineteen_input = document.getElementById("text_nineteen_input");

//                                     textNineteenCheckbox.addEventListener("click", function() {
//                                         var x = document.getElementById("textNineteenCheckbox").checked;

//                                         if (x === true) {
//                                             text_nineteen_input.classList.remove("d-none");
//                                             var setNameAtt = text_nineteen_input.setAttribute("name", "text_nineteen");


//                                         } else {
//                                             text_nineteen_input.classList.add("d-none");
//                                             var setNameAtt = text_nineteen_input.removeAttribute("name");


//                                         }
//                                     });

           
//                                     let textTwentyCheckbox = document.getElementById("textTwentyCheckbox");
//                                         let text_twenty_input = document.getElementById("text_twenty_input");

//                                         textTwentyCheckbox.addEventListener("click", function() {
//                                             var x = document.getElementById("textTwentyCheckbox").checked;

//                                             if (x === true) {
//                                                 text_twenty_input.classList.remove("d-none");
//                                                 var setNameAtt = text_twenty_input.setAttribute("name", "text_twenty");


//                                             } else {
//                                                 text_twenty_input.classList.add("d-none");
//                                                 var setNameAtt = text_twenty_input.removeAttribute("name");


//                                             }
//                                         });

//         });

                                   

