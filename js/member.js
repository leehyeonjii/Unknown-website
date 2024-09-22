document.addEventListener("DOMContentLoaded", () => {
    const login_button=document.querySelector("#login_button")
    
    login_button.addEventListener("click",() => {
        self.location.href='./member_login.php'
    })
})