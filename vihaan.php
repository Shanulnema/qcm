<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- external CSS-->
    <link rel="stylesheet" href="style.css" type="text/css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Gayathri&display=swap" rel="stylesheet">
    <!-- icon -->
    <script src="https://kit.fontawesome.com/88ecc5f85f.js"></script>
    <title>Vihaan-2k19</title>
  </head>
  <body class="">
    
    <div class="container-fluid p-0 main">
        <div class="w-100 d-flex pl-5 nav">   
            <img src="images/qcm.jpg" alt="" class="logo">
        </div>
        <p class="h1 pt-5">REGISTRATION FOR VIHAAN-2K19</p>
        <div class="d-flex justify-content-center">
        <table >
                <form method="POST" action="script.php">
                <tr >
                  <td class="p-2"><label for="fname1">Name (Member-1)</label></td>
                  <td class="p-2"><input type="text" id="fname1" name="name1" placeholder="Member-1 name.." class="p-1">
                      </td>
                </tr>
                
                <tr >
                  <td class="p-2"><label for="sno1">Scholar Number (Member-1)</label></td>
                  <td class="p-2"><input type="text" id="sno1" name="schno1" placeholder="Member-1 scholar number.." class="p-1" ></td>
                </tr>
                <tr>
                        <td class="p-2"><label for="branch1">Branch (Member-1)</label></td>    
                        <td>
                        <!--<input type="radio" name="branch" value="CSE" checked> CSE<br>
                        <input type="radio" name="branch" value="Mechanical" checked> Mechanical<br>
                        <input type="radio" name="branch" value="Civil" checked> Civil<br>
                        <input type="radio" name="branch" value="ECE" checked> ECE<br>
                        <input type="radio" name="branch" value="Electrical" checked> Electrical<br>
                        <input type="radio" name="branch" value="Chemical" checked> Chemical<br>
                        <input type="radio" name="branch" value="MSME" checked> MSME<br>
                        <input type="radio" name="branch" value="Architecture" checked> Architecture<br>
                        <input type="radio" name="branch" value="Planning" checked> Planning<br>-->
                        <select name="branch1">
                                <option value="Mechanical">Mechanical</option>
                                <option value="CSE">CSE</option>
                                <option value="Civil">Civil</option>
                                <option value="ECE">ECE</option>
                                <option value="Electrical">Electrical</option>
                                <option value="Chemical">Chemical</option>
                                <option value="MSME">MSME</option>
                                <option value="Architecture">Architecture</option>
                                <option value="Planning">Planning</option>
                              </select>
                        
                        </td>

                </tr>
                <tr >
                        <td class="p-2"><label for="fname2">Name (Member-2)</label></td>
                        <td class="p-2"><input type="text" id="fname2" name="name2" placeholder="Member-2 name.." class="p-1">
                            </td>
                      </tr>
                      
                      <tr >
                        <td class="p-2"><label for="sno2">Scholar Number (Member-2)</label></td>
                        <td class="p-2"><input type="text" id="sno2" name="schno2" placeholder="Member-2 scholar number.." class="p-1" ></td>
                      </tr>
                      <tr>
                              <td class="p-2"><label for="branch2">Branch (Member-2)</label></td>    
                              <td>
                              <!--<input type="radio" name="branch" value="CSE" checked> CSE<br>
                              <input type="radio" name="branch" value="Mechanical" checked> Mechanical<br>
                              <input type="radio" name="branch" value="Civil" checked> Civil<br>
                              <input type="radio" name="branch" value="ECE" checked> ECE<br>
                              <input type="radio" name="branch" value="Electrical" checked> Electrical<br>
                              <input type="radio" name="branch" value="Chemical" checked> Chemical<br>
                              <input type="radio" name="branch" value="MSME" checked> MSME<br>
                              <input type="radio" name="branch" value="Architecture" checked> Architecture<br>
                              <input type="radio" name="branch" value="Planning" checked> Planning<br>-->
                              <select name="branch2">
                                      <option value="Mechanical">Mechanical</option>
                                      <option value="CSE">CSE</option>
                                      <option value="Civil">Civil</option>
                                      <option value="ECE">ECE</option>
                                      <option value="Electrical">Electrical</option>
                                      <option value="Chemical">Chemical</option>
                                      <option value="MSME">MSME</option>
                                      <option value="Architecture">Architecture</option>
                                      <option value="Planning">Planning</option>
                                    </select>
                              
                              </td>
      
                      </tr>
                <tr>
                        <td class="p-2"><label for="email">Email</label></td>
                        <td><input type="email" name="Email" placeholder="email id.." class="p-1"></td>
                </tr>
                <tr>
                        <td class="p-2"><label for="number">Contact no.</label></td>
                        <td><input type="number" name="Contact" placeholder="contact no.." class="p-1"></td>
                </tr>
                <tr>
                  <td colspan="2"  align="center" >
                  <input type="hidden" name="form_submitted" value="1" >
                  <button type="submit" form="form1" value="Submit" class="btn btn-outline-dark m-3">Submit</button></td>
                </tr>
              </form>
            </table>
        </div>
        <div class="footer d-flex justify-content-center flex-wrap p-3 ">
                <div class="tac mb-3"><img src="images/favicon.png" class="c w-25" alt=""></div>
                <div class="w-100 tac mb-3">
                    <a href="https://www.facebook.com/Quizofficial.manit/" target="_blank"><i class="fab fa-facebook-f tac"></i></a>&nbsp;&nbsp;
                    <a href="https://instagram.com/quizzersclub?igshid=way1wjiqu8pp" target="_blank"><i class="fab fa-instagram tac"></i></a>&nbsp;&nbsp;
                </div>
                <div class="text-white alpha">
                    Quizzer's Club MANIT © All RIGHTS RESERVED 2019
                    <br />
                    Converted from  <i class="fas fa-mug-hot ml-1 mr-1 "></i>  to <b class="text-danger">&lt;CODE /></b> by Paras (@pdandwani)
                </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>