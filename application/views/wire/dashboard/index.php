<?php $this->load->view('wire/estrutura/topo'); ?> <!-- Header -->

</head>
<?php $this->load->view('wire/estrutura/menu'); ?> <!-- Menu -->

<!--------- Dashboard ------------->

    <div class="wrapper">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Mobaya WIRE</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>

            <div class="row">

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-home-group bg-primary  text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-16">Vendas realizadas</h5>
                            </div>
                            <h3 class="mt-4">90</h3>
                            <div class="progress mt-4" style="height: 4px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-muted mt-2 mb-0">Pregresso atual<span class="float-right">55%</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-16">Lucro total</h5>
                            </div>
                            <h3 class="mt-4">R$ 26.703.265</h3>
                            <div class="progress mt-4" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 78%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-muted mt-2 mb-0">Pregresso atual<span class="float-right">78%</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-tag-text-outline bg-warning text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-16">Meus imóveis</h5>
                            </div>
                            <h3 class="mt-4">447</h3>
                            <div class="progress mt-4" style="height: 4px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-muted mt-2 mb-0">Vendidos<span class="float-right">68%</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-exit-run bg-danger text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-16">Taxa de rejeição</h5>
                            </div>
                            <h3 class="mt-4">62%</h3>
                            <div class="progress mt-4" style="height: 4px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-muted mt-2 mb-0">Ano passado<span class="float-right">82%</span></p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-xl-8">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h4 class="mt-0 header-title mb-4">Perfil de público : Imóveis vendidos</h4>

                            <div id="morris-area-example" class="morris-charts morris-chart-height"></div>

                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-4">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Mais procurados hoje</h4>

                            <div id="morris-donut-example" class="morris-charts morris-chart-height"></div>

                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-4">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Lider em vendas</h4>
                            <div class="friends-suggestions">
                                <a href="#" class="friends-suggestions-list">
                                    <div class="border-bottom position-relative">
                                        <div class="float-left mb-0 mr-3">
                                            <img src="assets/images/users/user-2.jpg" alt="" class="rounded-circle thumb-md">
                                        </div>
                                        <div class="suggestion-icon float-right mt-2 pt-1">
                                            <i class="mdi mdi-plus"></i>
                                        </div>

                                        <div class="desc">
                                            <h5 class="font-14 mb-1 pt-2">Natália Ramirez</h5>
                                            <p class="text-muted">30 Vendas realizadas no mês</p>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="friends-suggestions-list">
                                    <div class="border-bottom position-relative">
                                        <div class="float-left mb-0 mr-3">
                                            <img src="assets/images/users/user-3.jpg" alt="" class="rounded-circle thumb-md">
                                        </div>
                                        <div class="suggestion-icon float-right mt-2 pt-1">
                                            <i class="mdi mdi-plus"></i>
                                        </div>

                                        <div class="desc">
                                            <h5 class="font-14 mb-1 pt-2">Patrick Oliveira</h5>
                                            <p class="text-muted">17 Vendas realizadas no mês</p>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="friends-suggestions-list">
                                    <div class="border-bottom position-relative">
                                        <div class="float-left mb-0 mr-3">
                                            <img src="assets/images/users/user-4.jpg" alt="" class="rounded-circle thumb-md">
                                        </div>
                                        <div class="suggestion-icon float-right mt-2 pt-1">
                                            <i class="mdi mdi-plus"></i>
                                        </div>

                                        <div class="desc">
                                            <h5 class="font-14 mb-1 pt-2">Letícia Zamora</h5>
                                            <p class="text-muted">15 Vendas realizadas no mês</p>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="friends-suggestions-list">
                                    <div class="border-bottom position-relative">
                                        <div class="float-left mb-0 mr-3">
                                            <img src="assets/images/users/user-5.jpg" alt="" class="rounded-circle thumb-md">
                                        </div>
                                        <div class="suggestion-icon float-right mt-2 pt-1">
                                            <i class="mdi mdi-plus"></i>
                                        </div>

                                        <div class="desc">
                                            <h5 class="font-14 mb-1 pt-2">Manoel José</h5>
                                            <p class="text-muted">11 Vendas realizadas no mês</p>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="friends-suggestions-list">
                                    <div class="position-relative">
                                        <div class="float-left mb-0 mr-3">
                                            <img src="assets/images/users/user-6.jpg" alt="" class="rounded-circle thumb-md">
                                        </div>
                                        <div class="suggestion-icon float-right mt-2 pt-1">
                                            <i class="mdi mdi-plus"></i>
                                        </div>

                                        <div class="desc">
                                            <h5 class="font-14 mb-1 pt-2">Lucas Brito</h5>
                                            <p class="text-muted mb-1">6 Vendas realizadas no mês</p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Vendas por projetos</h4>
                            <div id="morris-line-example" class="morris-chart" style="height: 360px"></div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-4">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h4 class="mt-0 header-title mb-4">Atividades Recentes</h4>
                            <ol class="activity-feed mb-0">
                                <li class="feed-item">
                                    <div class="feed-item-list">
                                        <p class="text-muted mb-1">Agora</p>
                                        <p class="font-15 mt-0 mb-0">Francisco criou um projeto: <b class="text-primary">Condomínio Rowland</b></p>
                                    </div>
                                </li>
                                <li class="feed-item">
                                    <p class="text-muted mb-1">Ontém</p>
                                    <p class="font-15 mt-0 mb-0">Sérgio converteu 1093 clientes: <b class="text-primary">Condomínio Piazza Monet</b></p>
                                </li>
                                <li class="feed-item">
                                    <p class="text-muted mb-1">12:30h</p>
                                    <p class="font-15 mt-0 mb-0">Brito, postou estratégia de campo <b class="text-primary"> Armonia da venda</b></p>
                                </li>
                                <li class="feed-item pb-1">
                                    <p class="text-muted mb-1">12:48h</p>
                                    <p class="font-15 mt-0 mb-2">Manoel José, vendeu <b class="text-primary">Imóvel #323</b></p>
                                </li>

                            </ol>

                        </div>
                    </div>
                </div>
            </div>

            <!-- START ROW -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Processamento de vendas</h4>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Valor</th>
                                            <th scope="col">Corretor</th>
                                            <th scope="col">Localização</th>
                                            <th scope="col" colspan="2">Data</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Philip José</td>
                                            <td><span class="badge badge-success">Vendido</span></td>
                                            <td>R$609.420,00</td>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-2.jpg" alt="" class="thumb-md rounded-circle mr-2"> Natália Ramirez
                                                </div>
                                            </td>
                                            <td>São Paulo, SP <a href='#'>Imóvel #323</a></td>
                                            <td>15/11/2019</td>

                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Editar</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Roberto Snider</td>
                                            <td><span class="badge badge-warning">Processando</span></td>
                                            <td>R$300.120,00</td>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-3.jpg" alt="" class="thumb-md rounded-circle mr-2"> Patrick Oliveira
                                                </div>
                                            </td>
                                            <td>Jacareí, SP <a href="#" >Imóvel #4612</a></td>
                                            <td>15/11/2019</td>

                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Editar</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lucas Sitton</td>
                                            <td><span class="badge badge-success">Vendido</span></td>
                                            <td>R$336.360,00</td>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-4.jpg" alt="" class="thumb-md rounded-circle mr-2"> Letícia Zamora
                                                </div>
                                            </td>
                                            <td>Taubaté, SP <a href="#" >Imóvel #4238</a></td>
                                            <td>12/11/2019</td>

                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Editar</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alberto Rocha</td>
                                            <td><span class="badge badge-danger">Cancelado</span></td>
                                            <td>R$5.200.000,00</td>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-5.jpg" alt="" class="thumb-md rounded-circle mr-2"> Manoel José
                                                </div>
                                            </td>
                                            <td>S J Campos, SP <a href="#" >Imóvel #4449</a></td>
                                            <td>10/11/2019</td>

                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Editar</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>David Sanchez</td>
                                            <td><span class="badge badge-success">Vendido</span></td>
                                            <td>R$70.250,000</td>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-7.jpg" alt="" class="thumb-md rounded-circle mr-2"> Antônio Carlos
                                                </div>
                                            </td>
                                            <td>S J Campos, SP <a href="#" >Imóvel #3492</a></td>
                                            <td>10/11/2019</td>

                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Editar</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- END ROW -->

        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->

<!------------ fim Dashboard ---------------->

<?php $this->load->view('wire/estrutura/footer'); ?>


</body>

</html>