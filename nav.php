<style>
    nav {
        display: flex;
        justify-content: center;
        background-color: rgb(49, 48, 48);
        position: sticky;
        top: 0;
        left: 0;
        z-index: 10;
    }

    nav img {
        height: 60px;
        width: 80px;

    }

    nav a {
        color: white;
        list-style: none;
        text-decoration: none;
        margin: 20px 40px 20px 40px;
        border-radius: 4px;
        transition-property: background-color;
        cursor: pointer;

    }

    nav a:hover {
        background-color: rgb(206, 187, 187);

    }

    nav form {
        margin-top: 20px;
    }
</style>

<nav>
    <img src="images/logo.jpeg">
    <a href="index.php">Home</a>
    <a href="aboutus.php">About us</a>
    <a href="https://instagram.com/anshu_romeo?igshid=ZDdkNTZiNTM=">Contact</a>
    <a href="service.php">Services</a>
    <form action="php/cart.php" method="post">
        <button class="material-symbols-outlined" style="background-color: rgb(49, 48, 48); color: #ffffff;">
            shopping_cart
        </button>
    </form>
</nav>