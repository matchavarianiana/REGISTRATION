<!DOCTYPE html>
<html>
<head>
    <title>Registation</title>
    <link rel="stylesheet" href="style.css">
</head>
 <body>
    <div class="main">
        <h1>REGISTRATION</h1>
        <form action="./form.php" method="post">
        <h3>Enter your Information</h3>
        
            <label for="first">
                  Username:
               </label>
            <input type="text" id="first" name="first"
                   placeholder="Enter your Username" required> 
            <label for="password">
                    Password:
                </label>
              <input type="password" id="password" name="password"
                     placeholder="Enter your Password" required>
            <label for="password">
                      Password:
                  </label>
                <input type="password" id="password" name="password"
                       placeholder="Repeat Your Password" required>
                <div class="wrap">
                <button type="submit"
                        onclick="solve()">
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>
</html>