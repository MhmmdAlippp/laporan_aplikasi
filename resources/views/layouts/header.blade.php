<style>
    .header {
    width: 100%;
    background: #fff;
    color: black;
    padding: 15px;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid #f0f0f0;
}

.logout {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 10px;
}

.logout span {
    opacity: 0.5;
    font-size: 12px;
}

.logout p {
    font-size: 12px;
}

.logout button {
    background-color: transparent;
    border: none;
    color: #e11d48;
    font-size: 12px;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 8px 12px;
    transition: 0.3s;
    border: 1px solid #f0f0f0;
    border-radius: 10px;
}

.logout button:hover {
    color: #be123c;
    transform: translateX(3px);
}

.logout button i {
    font-size: 20px;
}
</style>

<header class="header">
        <span>Sistem Monitoring Aplikasi</span>
        <div class="logout">
            <i class="ri-user-line"></i>
            <div class="admin">
                <p>Administrator</p>
                <span>Administrator</span>
            </div>
            <button>
                <i class="ri-logout-box-r-line"></i>
                Logout
            </button>
        </div>
    </header>