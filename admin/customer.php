<?php
$model = new Customer();
$data_customer = $model->dataCustomer();
?>
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Jenis Kartu</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No Telp</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No Telp</th>
                                            <th>Email</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach($data_customer as $row){
                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['nama_customer']?></td>
                                            <td><?= $row['alamat']?></td>
                                            <td><?= $row['no_telp']?></td>
                                            <td><?= $row['email']?></td>
                                            
                                        </tr>

                                        <?php
                                        $no++;
                                        }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>