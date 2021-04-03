var validate = {
    yearOfBirth: false,
    yourEmail: false,
    yourPhoneNumber: false,
}

function validateYearOfBirth (yearOfBirth) {
    if (!yearOfBirth) return
    var pattern =/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;
    if (pattern.test(yearOfBirth)) {
        $('.rqYoB').css('display', 'none')
        Object.assign(validate, {yearOfBirth: false})
    } else {
        $('.rqYoB').css('display', 'block')
        Object.assign(validate, {yearOfBirth: true})
    }
}

function validateYourEmail (yourEmail) {
    if (!yourEmail) return
    if (!yourEmail.includes('@')) {
        $('.rqEmail').css('display', 'block')
        Object.assign(validate, {yourEmail: true})
    } else {
        $('.rqEmail').css('display', 'none')
        Object.assign(validate, {yourEmail: false})
    }
}

function validatePhoneNumber(p) {
    if (!p) return
    const isphone = /^(1\s|1|)?((\(\d{3}\))|\d{3})(\-|\s)?(\d{3})(\-|\s)?(\d{4})$/.test(p);
    if (!isphone) {
        $('.rqPhone').css('display', 'block')
        Object.assign(validate, {yourPhoneNumber: true})
    } else {
        $('.rqPhone').css('display', 'none')
        Object.assign(validate, {yourPhoneNumber: false})
    }
  }


$(document).keypress(function(){
    const yourName  =  $('#yourName').val()
    const yearOfBirth  =  $('#yearOfBirth').val()
    const yourSchool  =  $('#yourSchool').val()
    const designCoursesEach  =  $('#designCoursesEach').val()
    const yourEmail  =  $('#yourEmail').val()
    const yourPhoneNumber  =  $('#yourPhoneNumber').val()
    const yourFacebookLink = $('#yourFacebookLink').val()
    const yourPortfolioLink = $('#yourPortfolioLink').val()
    const weAreReadyToListen = $('#weAreReadyToListen').val()
    if (
        yourName || yearOfBirth || yourSchool || designCoursesEach || yourEmail
        || yourPhoneNumber || yourFacebookLink || yourPortfolioLink || weAreReadyToListen
    ) {
        $('#submitYourProfile').css('color', '#11AF88')
        $('.btn_not_color').css('display', 'none')
        $('.btn_color').css('display', 'block')
    }  
});

$(document).ready(() => {
    
    $('#submitYourProfile').click(() => {
        const yourName  =  $('#yourName').val()
        const yearOfBirth  =  $('#yearOfBirth').val()
        const yourSchool  =  $('#yourSchool').val()
        const designCoursesEach  =  $('#designCoursesEach').val()
        const yourEmail  =  $('#yourEmail').val()
        const yourPhoneNumber  =  $('#yourPhoneNumber').val()
        const yourFacebookLink = $('#yourFacebookLink').val()
        const yourPortfolioLink = $('#yourPortfolioLink').val()
        const weAreReadyToListen = $('#weAreReadyToListen').val()
    
        const asyncValidate = async () => {
            await validateYearOfBirth(yearOfBirth)
            await validateYourEmail(yourEmail)
            await validatePhoneNumber(yourPhoneNumber)
        }
        asyncValidate()

        if (
            !yourName|| !yearOfBirth|| !yourSchool|| !yourEmail|| !yourPhoneNumber || !yourFacebookLink
            || !yourPortfolioLink || validate['yearOfBirth'] || validate['yourEmail'] || validate['yourPhoneNumber']
        ) {
            return
        }
        const baseURL = 'https://script.google.com/macros/s/AKfycbykprRWX7fqdiq5YpWfmUNmNG0s8OZ-9XQOV9V-rfuPKyMZZamIB0kLdpY2aH7JgTZbrA/exec'
        const payload = {
            your_name: yourName,
            your_date_of_birth: yearOfBirth,
            your_school: yourSchool,
            design_courses_each: designCoursesEach,
            your_email: yourEmail,
            your_phone_number: yourPhoneNumber,
            your_facebook_link: yourFacebookLink,
            your_portfolio_link: yourPortfolioLink,
            pit_ready_to_listen: weAreReadyToListen,
        }
    
        $.ajax({
            type : 'GET', 
            url : baseURL,
            dataType:'json',
            crossDomain : true,
            data : payload,
            success:function(data) {
                if(data == 'false') {
                    alert('Thêm không thành công, bạn cũng có thể sử dụng để hiển thị Popup hoặc điều hướng');
                }else{
                    alert('Đã thêm dữ liệu vào Form');
                }
            },
            error: function(err) {
                console.log('err', err);
            }
        })
        setTimeout(() => {
            window.location.href = 'result.php';
        }, 3000)
    })
})