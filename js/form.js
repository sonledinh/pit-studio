var validate = {
    yourName: {required: false},
    yearOfBirth: {
        required: false,
        format: false
    }
}

function validateYourName (yourName) {
    if (!yourName) {
        $('.required').css('display', 'block')
    } else {
        $('.required').css('display', 'none')
    }
}

function validateYearOfBirth (yearOfBirth) {
    if (!yearOfBirth) {
        $('.required').css('display', 'block')
        return
    }
    if (yearOfBirth.includes('/') || yearOfBirth.includes('-')) {
        validate['yearOfBirth']['format'] = false
    }
}
$(document).ready(() => {
    console.log(111);
    $('#submitYourProfile').click(() => {
        const yourName  =  $('#yourName').val()
        const yearOfBirth  =  $('#yyearOfBirthourName').val()
        const yourSchool  =  $('#yourSchool').val()
        const designCoursesEach  =  $('#designCoursesEach').val()
        const yourEmail  =  $('#yourEmail').val()
        const yourPhoneNumber  =  $('#yourPhoneNumber').val()
        const yourPortfolioLink = $('#yourPortfolioLink').val()
        const weAreReadyToListen = $('#weAreReadyToListen').val()

        validateYourName(yourName)
        validateYearOfBirth(yearOfBirth)

        


        console.log(1111, validate);
    })
})