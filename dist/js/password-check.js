
document.addEventListener('DOMContentLoaded', function () {
    var pass1 = document.querySelector('#password'),
        pass2 = document.querySelector('#password-check')
        pass2.setCustomValidity('Пароль некорректный')
        pass1.setCustomValidity('Пароль должен быть не меньше 6-х символов и не больше 40')
    pass1.addEventListener('input', function () {
        this.value != pass2.value ? pass2.setCustomValidity('Пароль некорректный') : pass2.setCustomValidity('')
        if (this.value ==""){pass2.setCustomValidity('Пароль некорректный') }
        
    5 < this.value.length && this.value.length < 41 ? this.setCustomValidity('') : this.setCustomValidity('Пароль должен быть не меньше 6-х символов и не больше 40') 
        
        // console.log('pass2 '+pass2.value)
        // console.log(3 < this.value.length && this.value.length < 40)
    })
    pass2.addEventListener('input', function (e) {
        this.value != pass1.value ? this.setCustomValidity('Пароль некорректный') : this.setCustomValidity('')
        
        
    })
})
