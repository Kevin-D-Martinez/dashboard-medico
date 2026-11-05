<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MediCitas - Panel Administrativo</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MediCitas</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Heading -->
            <div class="sidebar-heading">
                Gestión médica
            </div>

            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="pacientes.php">
                    <i class="fas fa-fw fa-user-injured"></i>
                    <span>Pacientes</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="doctores.php">
                    <i class="fas fa-fw fa-user-md"></i>
                    <span>Doctores</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="agendar-cita.php">
                    <i class="fas fa-fw fa-calendar-plus"></i>
                    <span>Agendar Cita</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="historial-clinico.php">
                    <i class="fas fa-fw fa-notes-medical"></i>
                    <span>Historial Clínico</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav ml-auto">

                        <!-- Notificaciones -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <span class="badge badge-danger badge-counter">3</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">Notificaciones</h6>
                                <a class="dropdown-item d-flex align-items-center" href="agendar-cita.php">
                                    <div class="mr-3"><div class="icon-circle bg-primary"><i class="fas fa-calendar-check text-white"></i></div></div>
                                    <div><div class="small text-gray-500">Hoy, 10:00 AM</div>
                                        Cita con María Pérez - Cardiología</div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="agendar-cita.php">
                                    <div class="mr-3"><div class="icon-circle bg-warning"><i class="fas fa-clock text-white"></i></div></div>
                                    <div><div class="small text-gray-500">Hoy, 2:30 PM</div>
                                        Cita pendiente de confirmar: Ana Gómez</div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="historial-clinico.php">
                                    <div class="mr-3"><div class="icon-circle bg-success"><i class="fas fa-notes-medical text-white"></i></div></div>
                                    <div><div class="small text-gray-500">Ayer</div>
                                        Nuevo registro en el historial de Luis Martínez</div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="historial-clinico.php">Ver historial clínico</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Usuario -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin MediCitas</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Agendar Cita</h1>
<div class="card shadow mb-4">
                        <div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">Nueva cita</h6></div>
                        <div class="card-body">
                            <form id="formCita">
                                <div class="form-row">
                                    <div class="form-group col-md-6"><label>Paciente</label>
                                        <select class="form-control" name="paciente"><option>María Pérez</option><option>Juan Rodríguez</option><option>Ana Gómez</option><option>Luis Martínez</option></select></div>
                                    <div class="form-group col-md-6"><label>Doctor(a)</label>
                                        <select class="form-control" name="doctor"><option>Dra. Carmen Santos - Cardiología</option><option>Dr. Rafael Díaz - Pediatría</option><option>Dra. Laura Núñez - Dermatología</option><option>Dr. Pedro Castillo - Medicina general</option></select></div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4"><label>Fecha</label><input type="date" class="form-control" name="fecha" required></div>
                                    <div class="form-group col-md-4"><label>Hora</label><input type="time" class="form-control" name="hora" required></div>
                                    <div class="form-group col-md-4"><label>Tipo</label><select class="form-control" name="tipo"><option>Consulta general</option><option>Especialista</option><option>Control</option></select></div>
                                </div>
                                <div class="form-group"><label>Motivo</label><textarea class="form-control" name="motivo" rows="3"></textarea></div>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-calendar-check"></i> Agendar</button>
                            </form>
                        </div></div>

                    <div id="msgCita" class="alert alert-success d-none"><i class="fas fa-check-circle"></i> Cita agendada correctamente.</div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Citas agendadas</h6>
                            <button type="button" id="limpiar" class="btn btn-sm btn-outline-danger">Borrar todas</button>
                        </div>
                        <div class="card-body"><div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead><tr><th>Fecha</th><th>Hora</th><th>Paciente</th><th>Doctor(a)</th><th>Tipo</th><th>Motivo</th></tr></thead>
                                <tbody id="listaCitas"></tbody>
                            </table></div>
                            <p id="vacio" class="text-gray-500 mb-0">Aún no hay citas agendadas.</p>
                        </div></div>
                
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; MediCitas 2026</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutLabel">¿Listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">Selecciona "Cerrar sesión" si deseas finalizar tu sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="login.php">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

<script>
        (function () {
            var KEY = 'medicitas_citas', tbody = document.getElementById('listaCitas');
            function leer() { try { return JSON.parse(localStorage.getItem(KEY)) || []; } catch (e) { return []; } }
            function guardar(c) { try { localStorage.setItem(KEY, JSON.stringify(c)); } catch (e) {} }
            function esc(s) { var d = document.createElement('div'); d.textContent = s; return d.innerHTML; }
            function pintar(c) {
                tbody.innerHTML = c.map(function (x) {
                    return '<tr><td>' + esc(x.fecha) + '</td><td>' + esc(x.hora) + '</td><td>' + esc(x.paciente) + '</td><td>' + esc(x.doctor) + '</td><td>' + esc(x.tipo) + '</td><td>' + esc(x.motivo) + '</td></tr>';
                }).join('');
                document.getElementById('vacio').style.display = c.length ? 'none' : '';
            }
            var citas = leer(); pintar(citas);
            document.getElementById('formCita').addEventListener('submit', function (e) {
                e.preventDefault();
                var f = e.target;
                citas.push({ fecha: f.fecha.value, hora: f.hora.value, paciente: f.paciente.value, doctor: f.doctor.value, tipo: f.tipo.value, motivo: f.motivo.value || '-' });
                guardar(citas); pintar(citas); f.reset();
                var m = document.getElementById('msgCita'); m.classList.remove('d-none');
                setTimeout(function () { m.classList.add('d-none'); }, 3000);
            });
            document.getElementById('limpiar').addEventListener('click', function () { citas = []; guardar(citas); pintar(citas); });
        })();
    </script>
</body>

</html>