<?php  require "header_logged.php"?>

        <main>
            <div class="container-fluid text-center admin-pet">   
                <div class="row justify-content-center">
                    <div class="col-sm-5 col-md-5 col-lg-5" style="text-align: left; color:#ae1d1d;">                    
                        <h5><strong>Adoptii la distanta</strong></h5>
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-5" style="text-align: right;">                    
                        <a href="admin_actionAdoptiiDistanta.php" class="btn btn-primary"> Adauga adoptie la distanta <i class="bi bi-plus-circle"></i></a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-12 col-lg-10">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">ID pet</th>
                                    <th scope="col">Nume pet</th>
                                    <th scope="col">ID utilizator</th>
                                    <th scope="col">Email utilizator</th>
                                    <th scope="col">Data adoptie</th>
                                    <th scope="col">Perioada (luni)</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>23</td>
                                        <td>Lola</td>
                                        <td>241</td>
                                        <td>ionpop@yahoo.com</td>
                                        <td>13-04-2025</td>
                                        <td>1</td>
                                        <td>
                                            <button class="btn btn-secondary">Sterge <i class="bi bi-trash3"></i></button>
                                            <a href="admin_actionAdoptiiDistanta.php" class="btn btn-secondary"> Editeaza <i class="bi bi-pencil-square"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>28</td>
                                        <td>Coco</td>
                                        <td>127</td>
                                        <td>maria.fat@yahoo.com</td>
                                        <td>13-02-2025</td>
                                        <td>6</td>
                                        <td>
                                            <button class="btn btn-secondary">Sterge <i class="bi bi-trash3"></i></button>
                                            <a href="admin_actionAdoptiiDistanta.html" class="btn btn-secondary"> Editeaza <i class="bi bi-pencil-square"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>45</td>
                                        <td>Polly</td>
                                        <td>93</td>
                                        <td>biancabaias@yahoo.com</td>
                                        <td>05-01-2025</td>
                                        <td>2</td>
                                        <td>
                                            <button class="btn btn-secondary">Sterge <i class="bi bi-trash3"></i></button>
                                            <a href="admin_actionAdoptiiDistanta.php" class="btn btn-secondary"> Editeaza <i class="bi bi-pencil-square"></i></a>
                                        </td>
                                    </tr>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        
<?php  require "footer.php"?>