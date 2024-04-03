function confirmLogout(event) {
        event.preventDefault();
    if (confirm("ログアウトしてもよろしいですか？")) {
        document.getElementById('logout-form').submit();
    }

    document.querySelector('.dropdown-item').style.backgroundColor = 'transparent';
    
}