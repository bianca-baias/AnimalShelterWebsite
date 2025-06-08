<?php  require "admin_header.php"?>

        <main>
            <div class="container-fluid text-center admin-pet">   
                <div class="row justify-content-center">
                    <div class="col-sm-5 col-md-5 col-lg-5" style="text-align: left; color:#ae1d1d;">                    
                        <h5><strong>Membrii</strong></h5>
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-5" style="text-align: right;">                    
                        <a href="admin_actionMembru.php" class="btn btn-primary"> Adauga membru <i class="bi bi-plus-circle"></i></a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-12 col-lg-10">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nume</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Data crearii</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Bohoni Monika</td>
                                        <td>monica_b@yahoo.com</td>
                                        <td>01-01-2010</td>
                                        <td>
                                            <button class="btn btn-secondary">Sterge <i class="bi bi-trash3"></i></button>
                                            <a href="admin_actionMembru.php" class="btn btn-secondary"> Editeaza <i class="bi bi-pencil-square"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Muresan Ioana</td>
                                        <td>mioana@yahoo.com</td>
                                        <td>24-12-2020</td>
                                        <td>
                                            <button class="btn btn-secondary">Sterge <i class="bi bi-trash3"></i></button>
                                            <a href="admin_actionMembru.php" class="btn btn-secondary"> Editeaza <i class="bi bi-pencil-square"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Baias Bianca</td>
                                        <td>biancabaias@yahoo.com</td>
                                        <td>15-07-2023</td>
                                        <td>
                                            <button class="btn btn-secondary">Sterge <i class="bi bi-trash3"></i></button>
                                            <a href="admin_actionMembru.php" class="btn btn-secondary"> Editeaza <i class="bi bi-pencil-square"></i></a>
                                        </td>
                                    </tr>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>        </main>
        
<?php  require "footer.php"?>