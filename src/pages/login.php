<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is a website about our Dairy.">
    <meta name="keywords" content="Dairy, Journal, Shessh">
    <title>TwoHeartsMemoir | Login</title>
    <link rel="shortcut icon" href="../icons/allentry2.png" type="image/x-icon">
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500;600;700&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
	<section class="bg-login-pattern min-h-screen bg-cover bg-center bg-no-repeat  text-white grid grid-cols-1 lg:bg-none lg-fixed lg:bg-black overflow-hidden lg:grid-cols-2" >
        <div class=" w-[50vw] hidden lg:block relative">
            <img class="h-full rotate-[16.516deg] scale-[1.1] origin-top-right" src="../images/login-bg.jpg" alt="">
        </div>
       <div class="m-0 flex flex-col gap-5 h-[30rem] justify-around md:justify-start md:gap-8 lg:gap-5 lg:justify-around p-8 md:h-full md:m-10 lg:m-5  ">
        <div>
            <p class="font-light mb-2 text-[4vw]  md:text-2xl lg:text-[1.4rem]">
                Welcome <span class="font-bold text-secondary-lightviolet text-[4vw] md:text-2xl lg:text-[1.4rem]">Darling Ysje</span>
            </p>
            <h1 class="text-[4vw] md:text-2xl tracking-wide lg:text-[1.4rem]">
                Login to your account
            </h1>
        </div>
        <form action="../php/login-excute.php" class="flex flex-col gap-6 " method="post" id="form-login">
            <div class="flex flex-col gap-3">
                <label for="">Email</label>
                <input id="input-username" class="rounded-sm h-[2.5rem] text-black" type="email" name="username">
                <p id="emailErr"></p>
            </div>
            <div class="flex flex-col gap-3">
                <label for="">Password</label>
                <input id="input-password" class="rounded-sm h-[2.5rem] text-black" type="password" name="password">
                <p id="passErr"></p>
            </div>
            <button class="bg-black-hsl rounded-sm h-[2.5rem]  md:bg-primary-darkviolet ">
                <a href="../pages/home.html">Login</a>
            </button>
        </form>
        <div class="self-center">
            <p class=" text-[3vw] sm:text-[1.1rem] ">
                Forgot your Password ? 
                <span class=" font-bold text-secondary-lightviolet">
                    Reset for free
                </span>
            </p>
        </div>
       </div>
       <footer class="text-center  md:absolute md:left-2  md:bottom-2 ">
        <p class="text-[0.7rem] md:text-[0.7rem]">@ 2023 Darling All Rights Reserved.</p>
       </footer>
    </section>
    <script src="../js/scriptLogin.js"></script>
</body>
</html>