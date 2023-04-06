<link rel="stylesheet" type="text/css" href="daftar.css">
<body>
<h1 class="juduldaftar">Login To Join Us</h1>
<form class="daftarr" action="register.php" method="POST">
        <fieldset>
            <legend>User Login</legend>
            <p>
                <label for="idusername">Username:</label> 
                <input id="idusername" type="text" name="username" placeholder="username" />
            </p>
            <p>
                <label for="idemail">Email:</label> 
                <input id="idemail" type="email" name="email" placeholder="email" />
            </p>
            <p>
                <label for="idpassword">Password:</label> 
                <input id="idpassword" type="password" name="password" />
            </p>
        </fieldset>

        <fieldset>
            <p>
                <label for="idagree">Are you sure this is correct?</label> 
                <input id="idagree" type="checkbox" name="bersedia_ikut" value="ya">  
            </p>
            <p>
                <input type="reset" value="Reset">
                <input type="button" name="submit" value="submit"/>
            </p>
        </fieldset>
</form>
</div>
</body>