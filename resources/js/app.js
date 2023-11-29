import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import './main';
import Swal from 'sweetalert2';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
window.Swal = Swal;

Alpine.start();
