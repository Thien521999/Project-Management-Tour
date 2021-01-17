document.addEventListener("DOMContentLoaded", function () {
    /*open form-box register */
    var account = document.getElementById('account');
    var box_form = document.getElementById('box-form');
    account.onclick = () => {
        box_form.classList.toggle('ra');
    }

    /* login */
    var login = document.getElementById('login');
    var modal = document.getElementById('modal');
    var register_header = document.getElementById('register_header');
    var login__header = document.getElementById('login__header');
    login.onclick = () => {
        box_form.classList.remove('ra'); //an di hop thoai form-box
        modal.classList.add('ra'); //Hien thi hop thoai dang nhap

        register_header.onclick = () => {
            modal.classList.remove('ra');//an di hop thoai dang nhap
            modal2.classList.add('ra'); // Hien thi hop thoai dang ky
        }

        login__header.onclick = () => {
            //console.log("hi");
            modal2.classList.remove('ra');//an di hop thoai dang ky
            modal.classList.add('ra');// Hien thi hop thoai dang nhap
        }
    }

    // modal.onclick = () => {
    //     console.log('xin chao');
    //     modal.classList.remove('ra');
    // }

    /* register */
    var register = document.getElementById('register');
    var modal2 = document.getElementById('modal2');
    register.onclick = () => {
        box_form.classList.remove('ra');
        modal2.classList.add('ra');

        login__header.onclick = () => {
            modal2.classList.remove('ra');
            modal.classList.add('ra');
        }

        register_header.onclick = () => {
            modal.classList.remove('ra');
            modal2.classList.add('ra');
        }
    }

    // modal2.onclick = () => {
    //     modal2.classList.remove('ra');
    // }


    /* return home page(login) */
    var homePage = document.getElementById('home');
    homePage.onclick = () => {
        window.location = "index.php?page=main";
    }

    /* return home page (register) */
    var homePage2 = document.getElementById('home2');
    homePage2.onclick = () => {
        window.location = "index.php?page=main";
    }

    /* Quan ly dat tour */
    var book__tour = document.getElementById('book__tour');
    var content__three = document.getElementById('content__three');

    book__tour.onclick = () => {
        console.log('hi');
        content__three.classList.toggle('content--three-open');
    }

    /*Tìm tour trong nước */
    var search__intour = document.getElementById('search__intour');
    var content__one = document.getElementById('content__one');
    search__intour.onclick = () => {
        console.log("hi");
        content__one.classList.toggle('content--one-open');
    }

    // var search__intour = document.getElementById('search__intour');
    // var content__one = document.getElementById('content__one');

    // var modal_search = document.getElementById('modal');

    // search__intour.onclick = () => {
    //     console.log("hi");
    //     modal_search.classList.add('ra');
    // }

    /*Tìm tour ngoài nước */
    var search__outtour = document.getElementById('search__outtour');
    var content__two = document.getElementById('content__two');
    search__outtour.onclick = () => {
        console.log('hi');
        content__two.classList.toggle('content--two-open');
    }

    /* Khi nhấn nút DESCRIPTION, MAP, REVIEW ..... */


    //Khi nhan vao thi them active
    // var myTour = document.getElementById('myTour');
    // myTour.onclick = function () {
    //     console.log('hi');
    // }
    // let booking_sticket = document.getElementById('booking_sticket');
    // let book_room = document.getElementById('book_room');
    // let camnang = document.getElementById('camnang');
    // let three_dot = document.getElementById('three_dot');

    /* Them active */
    //let choose = document.getElementById('')

    /* Thanh header */
    let trangthai = 'duoi300';
    let header = document.querySelector('.header');
    let header__navbar = document.querySelector('.header__navbar');
    let logo_image = document.querySelector('.logo_image');
    let logo_icon = document.querySelector('.logo-icon');
    window.addEventListener('scroll', function () { //de biet khi nao cuon chuot
        console.log(window.pageYOffset);//Vi tri cuon chuot.
        if (window.pageYOffset > 300) {
            if (trangthai == 'duoi300') {
                console.log('Ok r');
                trangthai = 'tren300';

                header.classList.add('header_nholai');
                header__navbar.classList.add('header__navbar-nholai');
                logo_image.classList.add('logo_image-nholai');
                logo_icon.classList.add('logo-icon--nholai');
            }
        } else if (window.pageYOffset <= 300) {
            if (trangthai == 'tren300') {
                trangthai = 'duoi300';

                header.classList.remove('header_nholai');
                header__navbar.classList.remove('header__navbar-nholai');
                logo_image.classList.remove('logo_image-nholai');
                logo_icon.classList.remove('logo-icon--nholai');
            }
        }
    })




})