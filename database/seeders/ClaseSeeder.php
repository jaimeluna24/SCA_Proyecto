<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clase;

class ClaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clases =
        [
            ["codigo"=> "LL-111", "asignatura"=> "Español", "created_by"=> 1],
            ["codigo"=> "IS-112", "asignatura"=> "Introducción a la Computación", "created_by"=> 1],
            ["codigo"=> "MM-111", "asignatura"=> "Algebra", "created_by"=> 1],
            ["codigo"=> "LCC-111", "asignatura"=> "Laboratorio de Procesamiento de Datos I", "created_by"=> 1],
            ["codigo"=> "MM-121", "asignatura"=> "Vectores y Matrices", "created_by"=> 1],
            ["codigo"=> "MM-122", "asignatura"=> "Geometría y Trigonometría", "created_by"=> 1],
            ["codigo"=> "LCC-122", "asignatura"=> "Laboratorio de Procesamiento de Datos II", "created_by"=> 1],
            ["codigo"=> "IS-131", "asignatura"=> "Programación I", "created_by"=> 1],
            ["codigo"=> "IS-141", "asignatura"=> "Programación II", "created_by"=> 1],
            ["codigo"=> "MM-131", "asignatura"=> "Cálculo I", "created_by"=> 1],
            ["codigo"=> "CN-130-132", "asignatura"=> "Área Electiva de Ciencias Naturales", "created_by"=> 1],
            ["codigo"=> "LCC-133", "asignatura"=> "Laboratorio de Procesamiento de Datos III", "created_by"=> 1],
            ["codigo"=> "IS-142", "asignatura"=> "Estructura de Datos", "created_by"=> 1],
            ["codigo"=> "MM-142", "asignatura"=> "Cálculo II", "created_by"=> 1],
            ["codigo"=> "FS-141", "asignatura"=> "Física I", "created_by"=> 1],
            ["codigo"=> "IS-151", "asignatura"=> "Programación III", "created_by"=> 1],
            ["codigo"=> "IP-141", "asignatura"=> "Dibujo Técnico", "created_by"=> 1],
            ["codigo"=> "MM-211", "asignatura"=> "Ecuaciones Diferenciales", "created_by"=> 1],
            ["codigo"=> "FS-212", "asignatura"=> "Física II", "created_by"=> 1],
            ["codigo"=> "LL-141", "asignatura"=> "Inglés I", "created_by"=> 1],
            ["codigo"=> "IS-211", "asignatura"=> "Organización de Archivos", "created_by"=> 1],
            ["codigo"=> "MM-222", "asignatura"=> "Estadística II", "created_by"=> 1],
            ["codigo"=> "MM-213", "asignatura"=> "Matemática Discreta", "created_by"=> 1],
            ["codigo"=> "ADM-111", "asignatura"=> "Administración General", "created_by"=> 1],
            ["codigo"=> "LL-142", "asignatura"=> "Inglés II", "created_by"=> 1],
            ["codigo"=> "HH-131", "asignatura"=> "Filosofía", "created_by"=> 1],
            ["codigo"=> "IS-161", "asignatura"=> "Programación IV", "created_by"=> 1],
            ["codigo"=> "LL-143", "asignatura"=> "Inglés III", "created_by"=> 1],
            ["codigo"=> "MM-214", "asignatura"=> "Métodos Numéricos", "created_by"=> 1],
            ["codigo"=> "IS-222", "asignatura"=> "Sistemas de Información", "created_by"=> 1],
            ["codigo"=> "HH-211", "asignatura"=> "Sociología", "created_by"=> 1],
            ["codigo"=> "IP-343", "asignatura"=> "Contabilidad General", "created_by"=> 1],
            ["codigo"=> "IS-311", "asignatura"=> "Análisis de Algoritmos", "created_by"=> 1],
            ["codigo"=> "IS-312", "asignatura"=> "Circuitos Digitales", "created_by"=> 1],
            ["codigo"=> "IS-313", "asignatura"=> "Teoría de Bases de Datos I", "created_by"=> 1],
            ["codigo"=> "IS-314", "asignatura"=> "Fundamentos de Informática Gráfica", "created_by"=> 1],
            ["codigo"=> "IP-413", "asignatura"=> "Contabilidad de Costos", "created_by"=> 1],
            ["codigo"=> "IS-321", "asignatura"=> "Buses y Periféricos", "created_by"=> 1],
            ["codigo"=> "IS-324", "asignatura"=> "Fundamentos de Inteligencia Artificial", "created_by"=> 1],
            ["codigo"=> "IS-331", "asignatura"=> "Equipo de Transmisión de Datos", "created_by"=> 1],
            ["codigo"=> "IS-332", "asignatura"=> "Informática Gráfica Aplicada", "created_by"=> 1],
            ["codigo"=> "IS-333", "asignatura"=> "Teoría de Bases de Datos II", "created_by"=> 1],
            ["codigo"=> "IS-334", "asignatura"=> "Lenguajes de Programación", "created_by"=> 1],
            ["codigo"=> "IS-341", "asignatura"=> "Tecnología de Redes Locales", "created_by"=> 1],
            ["codigo"=> "IS-342", "asignatura"=> "Ingeniería del Software I", "created_by"=> 1],
            ["codigo"=> "IS-343", "asignatura"=> "Sistemas Operativos I", "created_by"=> 1],
            ["codigo"=> "RH-131-132", "asignatura"=> "Arte / Deporte", "created_by"=> 1],
            ["codigo"=> "IS-411", "asignatura"=> "Taller de Ensamblaje I", "created_by"=> 1],
            ["codigo"=> "IS-412", "asignatura"=> "Ingeniería del Software II", "created_by"=> 1],
            ["codigo"=> "IS-413", "asignatura"=> "Seguridad de la Información", "created_by"=> 1],
            ["codigo"=> "IS-421", "asignatura"=> "Programación de Sistemas Operativos", "created_by"=> 1],
            ["codigo"=> "IS-422", "asignatura"=> "Taller de Ensamblaje II", "created_by"=> 1],
            ["codigo"=> "IS-414", "asignatura"=> "Sistemas Operativos II", "created_by"=> 1],
            ["codigo"=> "IP-431", "asignatura"=> "Finanzas", "created_by"=> 1],
            ["codigo"=> "IS-431", "asignatura"=> "Administración de Centros de Cómputo", "created_by"=> 1],
            ["codigo"=> "IS-432", "asignatura"=> "Traductores e Intérpretes I", "created_by"=> 1],
            ["codigo"=> "IP-441", "asignatura"=> "Preparación y Evaluación de Proyectos", "created_by"=> 1],
            ["codigo"=> "IS-441", "asignatura"=> "Traductores e Intérpretes II", "created_by"=> 1],
            ["codigo"=> "LIP-441", "asignatura"=> "Seminario de Graduación", "created_by"=> 1],
            ["codigo"=> "MM-143", "asignatura"=> "Estadística", "created_by"=> 1],
            ["codigo"=> "DR-112", "asignatura"=> "Derecho Romano", "created_by"=> 1],
            ["codigo"=> "DR-111", "asignatura"=> "Introducción al Estudio del Derecho", "created_by"=> 1],
            ["codigo"=> "IS-212", "asignatura"=> "Informática Administrativa", "created_by"=> 1],
            ["codigo"=> "DU-122", "asignatura"=> "Metodología de la Investigación", "created_by"=> 1],
            ["codigo"=> "DR-121", "asignatura"=> "Interpretación Jurídica", "created_by"=> 1],
            ["codigo"=> "DR-124", "asignatura"=> "Teoría General del Estado", "created_by"=> 1],
            ["codigo"=> "DU-433", "asignatura"=> "Oratoria Forense", "created_by"=> 1],
            ["codigo"=> "CP-123", "asignatura"=> "Ciencia Política", "created_by"=> 1],
            ["codigo"=> "DU-335", "asignatura"=> "Contabilidad", "created_by"=> 1],
            ["codigo"=> "DU-412", "asignatura"=> "Teoría General del Proceso", "created_by"=> 1],
            ["codigo"=> "DU-221", "asignatura"=> "Derecho de la Familia", "created_by"=> 1],
            ["codigo"=> "DU-132", "asignatura"=> "Derecho Laboral", "created_by"=> 1],
            ["codigo"=> "DU-225", "asignatura"=> "Derecho Agrario", "created_by"=> 1],
            ["codigo"=> "DU-424", "asignatura"=> "Derecho Procesal Civil I", "created_by"=> 1],
            ["codigo"=> "DU-223", "asignatura"=> "Derecho Laboral II", "created_by"=> 1],
            ["codigo"=> "DU-135", "asignatura"=> "Derecho Constitucional", "created_by"=> 1],
            ["codigo"=> "DU-133", "asignatura"=> "Derecho Penal I", "created_by"=> 1],
            ["codigo"=> "DU-311", "asignatura"=> "Derecho de los Bienes", "created_by"=> 1],
            ["codigo"=> "DU-315", "asignatura"=> "Derecho de la Seguridad Social", "created_by"=> 1],
            ["codigo"=> "LL-201", "asignatura"=> "Inglés II", "created_by"=> 1],
            ["codigo"=> "DU-224", "asignatura"=> "Derecho Penal II", "created_by"=> 1],
            ["codigo"=> "DU-323", "asignatura"=> "Derecho de Sucesiones", "created_by"=> 1],
            ["codigo"=> "DU-434", "asignatura"=> "Medicina Forense", "created_by"=> 1],
            ["codigo"=> "DU-522", "asignatura"=> "Justicia Constitucional", "created_by"=> 1],
            ["codigo"=> "LL-211", "asignatura"=> "Inglés III", "created_by"=> 1],
            ["codigo"=> "DU-431", "asignatura"=> "Derecho Procesal Civil II", "created_by"=> 1],
            ["codigo"=> "DU-134", "asignatura"=> "Derecho Administrativo I", "created_by"=> 1],
            ["codigo"=> "DU-333", "asignatura"=> "Derecho de los Contratos", "created_by"=> 1],
            ["codigo"=> "DU-415", "asignatura"=> "Derecho de la Niñez, Adolescencia y Mujer", "created_by"=> 1],
            ["codigo"=> "DU-313", "asignatura"=> "Derecho Administrativo II", "created_by"=> 1],
            ["codigo"=> "DU-336", "asignatura"=> "Derecho de las Obligaciones", "created_by"=> 1],
            ["codigo"=> "PS-142", "asignatura"=> "Psicología General", "created_by"=> 1],
            ["codigo"=> "DU-525", "asignatura"=> "Práctica Procesal en Materia de Niñez, Adolescencia y Mujer", "created_by"=> 1],
            ["codigo"=> "DU-514", "asignatura"=> "Práctica Procesal Administrativa", "created_by"=> 1],
            ["codigo"=> "DU-324", "asignatura"=> "Derecho Internacional Público", "created_by"=> 1],
            ["codigo"=> "DU-334", "asignatura"=> "Derecho Notarial I", "created_by"=> 1],
            ["codigo"=> "DU-222", "asignatura"=> "Derecho Mercantil I", "created_by"=> 1],
            ["codigo"=> "RH-131-136", "asignatura"=> "Electiva de Arte o Deporte", "created_by"=> 1],
            ["codigo"=> "DU-511", "asignatura"=> "Práctica Procesal Civil", "created_by"=> 1],
            ["codigo"=> "DU-421", "asignatura"=> "Criminología", "created_by"=> 1],
            ["codigo"=> "DU-312", "asignatura"=> "Derecho Mercantil II", "created_by"=> 1],
            ["codigo"=> "DU-513", "asignatura"=> "Derecho Procesal Laboral", "created_by"=> 1],
            ["codigo"=> "DU-414", "asignatura"=> "Derechos Humanos", "created_by"=> 1],
            ["codigo"=> "DU-325", "asignatura"=> "Derecho Internacional Privado", "created_by"=> 1],
            ["codigo"=> "DU-425", "asignatura"=> "Derecho Procesal Penal I", "created_by"=> 1],
            ["codigo"=> "DU-332", "asignatura"=> "Derecho Tributario", "created_by"=> 1],
            ["codigo"=> "DU-515", "asignatura"=> "Derecho Mercantil Avanzado", "created_by"=> 1],
            ["codigo"=> "DU-512", "asignatura"=> "Práctica Procesal Penal", "created_by"=> 1],
            ["codigo"=> "DU-411", "asignatura"=> "Derecho Notarial II", "created_by"=> 1],
            ["codigo"=> "DU-422", "asignatura"=> "Derecho Bancario", "created_by"=> 1],
            ["codigo"=> "DU-331", "asignatura"=> "Derecho de Integración", "created_by"=> 1],
            ["codigo"=> "DU-523", "asignatura"=> "Derecho de Ejecución Penal", "created_by"=> 1],
            ["codigo"=> "DU-521", "asignatura"=> "Ética Profesional", "created_by"=> 1],
            ["codigo"=> "DU-423", "asignatura"=> "Derecho Registral", "created_by"=> 1],
            ["codigo"=> "DU-413", "asignatura"=> "Derecho de la Propiedad Intelectual e Industrial", "created_by"=> 1],
            ["codigo"=> "ST-434", "asignatura"=> "Seminario de Graduación", "created_by"=> 1],
            ["codigo"=> "CN-130-132", "asignatura"=> "Electiva de Ciencias Naturales", "created_by"=> 1],
            ["codigo"=> "MM-120", "asignatura"=> "Pre cálculo", "created_by"=> 1],
            ["codigo"=> "MM-124", "asignatura"=> "Matemática Financiera I", "created_by"=> 1],
            ["codigo"=> "AD-131", "asignatura"=> "Introducción a la Administración", "created_by"=> 1],
            ["codigo"=> "RH-131-134", "asignatura"=> "Electiva de Arte y Deporte", "created_by"=> 1],
            ["codigo"=> "MM-135", "asignatura"=> "Matemática Financiera II", "created_by"=> 1],
            ["codigo"=> "RD-131-132", "asignatura"=> "Electiva de Humanidades", "created_by"=> 1],
            ["codigo"=> "AD-141", "asignatura"=> "Teoría General de la Administración", "created_by"=> 1],
            ["codigo"=> "MM-143", "asignatura"=> "Inferencia Estadística", "created_by"=> 1],
            ["codigo"=> "AD-211", "asignatura"=> "Contabilidad I", "created_by"=> 1],
            ["codigo"=> "AD-213", "asignatura"=> "Organización y Métodos Operativos", "created_by"=> 1],
            ["codigo"=> "AD-214", "asignatura"=> "Métodos y Técnicas de Investigación", "created_by"=> 1],
            ["codigo"=> "AD-222", "asignatura"=> "Contabilidad II", "created_by"=> 1],
            ["codigo"=> "AD-224", "asignatura"=> "Investigación de Operaciones", "created_by"=> 1],
            ["codigo"=> "EC-221", "asignatura"=> "Microeconomía", "created_by"=> 1],
            ["codigo"=> "LL-141", "asignatura"=> "Inglés Técnico", "created_by"=> 1],
            ["codigo"=> "AD-231", "asignatura"=> "Planeación Estratégica", "created_by"=> 1],
            ["codigo"=> "AD-233", "asignatura"=> "Derecho Mercantil", "created_by"=> 1],
            ["codigo"=> "AD-234", "asignatura"=> "Contabilidad Administrativa", "created_by"=> 1],
            ["codigo"=> "EC-232", "asignatura"=> "Macroeconomía", "created_by"=> 1],
            ["codigo"=> "AD-241", "asignatura"=> "Dirección Empresarial", "created_by"=> 1],
            ["codigo"=> "MC-242", "asignatura"=> "Mercadotecnia I", "created_by"=> 1],
            ["codigo"=> "AD-244", "asignatura"=> "Derecho Laboral", "created_by"=> 1],
            ["codigo"=> "EC-243", "asignatura"=> "Economía de la Producción", "created_by"=> 1],
            ["codigo"=> "AD-311", "asignatura"=> "Contabilidad Administrativa II", "created_by"=> 1],
            ["codigo"=> "AD-312", "asignatura"=> "Control de la Gestión", "created_by"=> 1],
            ["codigo"=> "MC-313", "asignatura"=> "Mercadotecnia II", "created_by"=> 1],
            ["codigo"=> "AD-321", "asignatura"=> "Comunicación Empresarial", "created_by"=> 1],
            ["codigo"=> "AD-322", "asignatura"=> "Administración Financiera I", "created_by"=> 1],
            ["codigo"=> "AD-323", "asignatura"=> "Comportamiento Organizacional", "created_by"=> 1],
            ["codigo"=> "D-324", "asignatura"=> "Ética Empresarial", "created_by"=> 1],
            ["codigo"=> "EC-331", "asignatura"=> "Economía Empresarial", "created_by"=> 1],
            ["codigo"=> "AD-333", "asignatura"=> "Administración Financiera II", "created_by"=> 1],
            ["codigo"=> "AD-334", "asignatura"=> "Administración de los Recursos Humanos", "created_by"=> 1],
            ["codigo"=> "MC-341", "asignatura"=> "Comportamiento del Consumidor", "created_by"=> 1],
            ["codigo"=> "EC-342", "asignatura"=> "Comercio Internacional", "created_by"=> 1],
            ["codigo"=> "AD-411", "asignatura"=> "Desarrollo Organizacional", "created_by"=> 1],
            ["codigo"=> "AD-413", "asignatura"=> "Administración de la Producción", "created_by"=> 1],
            ["codigo"=> "AD-412", "asignatura"=> "Globalización OPTATIVA I", "created_by"=> 1],
            ["codigo"=> "AD-422", "asignatura"=> "Gestión del Conocimiento y del Capital Intelectual", "created_by"=> 1],
            ["codigo"=> "MC-423", "asignatura"=> "Comercio Electrónico OPTATIVA II", "created_by"=> 1],
            ["codigo"=> "AD-432", "asignatura"=> "Auditoría", "created_by"=> 1],
            ["codigo"=> "MC-433", "asignatura"=> "Gestión de la Tecnología OPTATIVA III", "created_by"=> 1],
            ["codigo"=> "IP-111", "asignatura"=> "Introducción a la Ingeniería", "created_by"=> 1],
            ["codigo"=> "MM-121", "asignatura"=> "Vectores y Matrices", "created_by"=> 1],
            ["codigo"=> "MM-122", "asignatura"=> "Geometría y Trigonometría", "created_by"=> 1],
            ["codigo"=> "QQ-131", "asignatura"=> "Química General", "created_by"=> 1],
            ["codigo"=> "LIP-141", "asignatura"=> "Dibujo Técnico", "created_by"=> 1],
            ["codigo"=> "IEC-211", "asignatura"=> "Programación", "created_by"=> 1],
            ["codigo"=> "MM-221", "asignatura"=> "Ecuaciones Diferenciales", "created_by"=> 1],
            ["codigo"=> "IE-213", "asignatura"=> "Circuitos Eléctricos I", "created_by"=> 1],
            ["codigo"=> "FS-222", "asignatura"=> "Física III", "created_by"=> 1],
            ["codigo"=> "MM-223", "asignatura"=> "Variable Compleja", "created_by"=> 1],
            ["codigo"=> "IE-233", "asignatura"=> "Microprocesadores", "created_by"=> 1],
            ["codigo"=> "IE-231", "asignatura"=> "Electromagnetismo I", "created_by"=> 1],
            ["codigo"=> "IE-221", "asignatura"=> "Circuitos Eléctricos II", "created_by"=> 1],
            ["codigo"=> "FS-233", "asignatura"=> "Física IV", "created_by"=> 1],
            ["codigo"=> "MM-234", "asignatura"=> "Análisis Numérico", "created_by"=> 1],
            ["codigo"=> "IE-232", "asignatura"=> "Electrónica I", "created_by"=> 1],
            ["codigo"=> "IE-241", "asignatura"=> "Electromagnetismo II", "created_by"=> 1],
            ["codigo"=> "MM-332", "asignatura"=> "Métodos Matemáticos para la Ingeniería", "created_by"=> 1],
            ["codigo"=> "IE-242", "asignatura"=> "Electrónica II", "created_by"=> 1],
            ["codigo"=> "IE-243", "asignatura"=> "Sistemas de Control Lineal", "created_by"=> 1],
            ["codigo"=> "IE-311", "asignatura"=> "Electrónica Industrial", "created_by"=> 1],
            ["codigo"=> "IE-312", "asignatura"=> "Electrónica III", "created_by"=> 1],
            ["codigo"=> "IE-313", "asignatura"=> "Teoría de Sistemas Lineales", "created_by"=> 1],
            ["codigo"=> "IE-333", "asignatura"=> "Microelectrónica", "created_by"=> 1],
            ["codigo"=> "IE-323", "asignatura"=> "Diseño Digital", "created_by"=> 1],
            ["codigo"=> "IE-321", "asignatura"=> "Propagación", "created_by"=> 1],
            ["codigo"=> "IE-322", "asignatura"=> "Diseño Electrónico", "created_by"=> 1],
            ["codigo"=> "IE-343", "asignatura"=> "Electrónica de Potencia", "created_by"=> 1],
            ["codigo"=> "IE-331", "asignatura"=> "Computadores Digitales", "created_by"=> 1],
            ["codigo"=> "IE-332", "asignatura"=> "Procesamiento Digital de Señales", "created_by"=> 1],
            ["codigo"=> "IE-342", "asignatura"=> "Antenas", "created_by"=> 1],
            ["codigo"=> "IE-412", "asignatura"=> "Controladores Lógicos Programables", "created_by"=> 1],
            ["codigo"=> "IE-341", "asignatura"=> "Comunicaciones", "created_by"=> 1],
            ["codigo"=> "IE-411", "asignatura"=> "Comunicaciones II", "created_by"=> 1],
            ["codigo"=> "IE-421", "asignatura"=> "Redes de Microondas", "created_by"=> 1],
            ["codigo"=> "IE-422", "asignatura"=> "Redes de Comunicaciones", "created_by"=> 1],
            ["codigo"=> "IE-432", "asignatura"=> "Redes de Computadoras", "created_by"=> 1],
            ["codigo"=> "IE-431", "asignatura"=> "Sistemas de Transmisión", "created_by"=> 1],
            ["codigo"=> "MM-131", "asignatura"=> "Cálculo I", "created_by"=> 1],
            ["codigo"=> "LIP-221", "asignatura"=> "Redacción Técnica", "created_by"=> 1],
            ["codigo"=> "IEM-222", "asignatura"=> "Electrotecnia", "created_by"=> 1],
            ["codigo"=> "IP-231", "asignatura"=> "Ingeniería de Métodos", "created_by"=> 1],
            ["codigo"=> "CC-231", "asignatura"=> "Programación", "created_by"=> 1],
            ["codigo"=> "IEM-231", "asignatura"=> "Mecánica para Ingenieros I", "created_by"=> 1],
            ["codigo"=> "IP-242", "asignatura"=> "Ingeniería de Métodos II", "created_by"=> 1],
            ["codigo"=> "IP-243", "asignatura"=> "Investigación de Operaciones", "created_by"=> 1],
            ["codigo"=> "IEM-242", "asignatura"=> "Mecánica para Ingenieros II", "created_by"=> 1],
            ["codigo"=> "IP-311", "asignatura"=> "Investigación de Operaciones II", "created_by"=> 1],
            ["codigo"=> "IP-312", "asignatura"=> "Ingeniería Económica", "created_by"=> 1],
            ["codigo"=> "IP-313", "asignatura"=> "Diseño de Producción", "created_by"=> 1],
            ["codigo"=> "IP-321", "asignatura"=> "Planificación Estratégica", "created_by"=> 1],
            ["codigo"=> "IP-322", "asignatura"=> "Control de Producción", "created_by"=> 1],
            ["codigo"=> "IP-323", "asignatura"=> "Ciencia de los Materiales", "created_by"=> 1],
            ["codigo"=> "IP-331", "asignatura"=> "Administración General", "created_by"=> 1],
            ["codigo"=> "IP-322", "asignatura"=> "Procesos Manufactura", "created_by"=> 1],
            ["codigo"=> "IP-333", "asignatura"=> "Control de la Producción II", "created_by"=> 1],
            ["codigo"=> "IP-341", "asignatura"=> "Relaciones Industriales", "created_by"=> 1],
            ["codigo"=> "IP-342", "asignatura"=> "Procesos de Manufactura II", "created_by"=> 1],
            ["codigo"=> "LIP-341", "asignatura"=> "Seminario de Derecho Laboral", "created_by"=> 1],
            ["codigo"=> "IP-411", "asignatura"=> "Manejo y Materiales de Planta", "created_by"=> 1],
            ["codigo"=> "IP-412", "asignatura"=> "Diagnóstico Industrial", "created_by"=> 1],
            ["codigo"=> "IP-413", "asignatura"=> "Contabilidad de Costos", "created_by"=> 1],
            ["codigo"=> "IP-512/13", "asignatura"=> "Optativa", "created_by"=> 1],
            ["codigo"=> "IP-421", "asignatura"=> "Control de Calidad", "created_by"=> 1],
            ["codigo"=> "IP-422", "asignatura"=> "Administración de la Producción", "created_by"=> 1],
            ["codigo"=> "IP-423", "asignatura"=> "Mercadotecnia", "created_by"=> 1],
            ["codigo"=> "LIP-421", "asignatura"=> "Seminario: Gestión de la Calidad Total", "created_by"=> 1],
            ["codigo"=> "IP-431", "asignatura"=> "Finanzas", "created_by"=> 1],
            ["codigo"=> "IP-432", "asignatura"=> "Psicología Industrial", "created_by"=> 1],
            ["codigo"=> "LIP-431", "asignatura"=> "Seminario de Seguridad Industrial", "created_by"=> 1],
            ["codigo"=> "IP-514/15", "asignatura"=> "Optativa II", "created_by"=> 1],
            ["codigo"=> "IP-441", "asignatura"=> "Preparación y Evaluación de Proyectos", "created_by"=> 1],
            ["codigo"=> "IP-442", "asignatura"=> "Ingeniería del Ambiente", "created_by"=> 1],
            ["codigo"=> "IP-516/IEM-442", "asignatura"=> "Optativa III", "created_by"=> 1],
            ["codigo"=> "TBE-103", "asignatura"=> "Ofimática", "created_by"=> 1],
            ["codigo"=> "PSE-052", "asignatura"=> "Teorías de la Personalidad", "created_by"=> 1],
            ["codigo"=> "TBE-164", "asignatura"=> "Ofimática II", "created_by"=> 1],
            ["codigo"=> "PSE-103", "asignatura"=> "Psicología del Desarrollo I", "created_by"=> 1],
            ["codigo"=> "PSE-093", "asignatura"=> "Teorías de la Personalidad II", "created_by"=> 1],
            ["codigo"=> "PSE-134", "asignatura"=> "Psicología del Desarrollo II", "created_by"=> 1],
            ["codigo"=> "PSE-144", "asignatura"=> "Métodos y Técnicas de Investigación Aplicadas en Psicología", "created_by"=> 1],
            ["codigo"=> "TBE-185", "asignatura"=> "Ofimática III", "created_by"=> 1],
            ["codigo"=> "PSE-164", "asignatura"=> "Psicofisiología I", "created_by"=> 1],
            ["codigo"=> "PSE-175", "asignatura"=> "Psicología del Desarrollo III", "created_by"=> 1],
            ["codigo"=> "PSE-185", "asignatura"=> "Métodos y Técnicas de Investigación Aplicadas en Psicología I", "created_by"=> 1],
            ["codigo"=> "PSE-205", "asignatura"=> "Psicofisiología II", "created_by"=> 1],
            ["codigo"=> "PSE-236", "asignatura"=> "Métodos y Técnicas de Investigación Aplicadas en Psicología II", "created_by"=> 1],
            ["codigo"=> "PSE-246", "asignatura"=> "Psicofisiología III", "created_by"=> 1],
            ["codigo"=> "PSE-257", "asignatura"=> "Ética y Deontología en Psicología", "created_by"=> 1],
            ["codigo"=> "PSE-277", "asignatura"=> "Conducta Anormal II", "created_by"=> 1],
            ["codigo"=> "PSE-298", "asignatura"=> "Introducción a la Psicometría", "created_by"=> 1],
            ["codigo"=> "PSE-308", "asignatura"=> "Conducta Anormal", "created_by"=> 1],
            ["codigo"=> "PSE-359", "asignatura"=> "Psicología Social", "created_by"=> 1],
            ["codigo"=> "PSE-329", "asignatura"=> "Psicometría I", "created_by"=> 1],
            ["codigo"=> "PSE-349", "asignatura"=> "Psicología del Trabajo", "created_by"=> 1],
            ["codigo"=> "PSE-359", "asignatura"=> "Psicología de la Salud", "created_by"=> 1],
            ["codigo"=> "PSE-339", "asignatura"=> "Psicología de los Grupos", "created_by"=> 1],
            ["codigo"=> "PSE-3610", "asignatura"=> "Psicometría II", "created_by"=> 1],
            ["codigo"=> "PSE-3810", "asignatura"=> "Psicología del Talento Humano", "created_by"=> 1],
            ["codigo"=> "CN-130,CN-131, CN-132", "asignatura"=> "Optativa de Ciencias Naturales", "created_by"=> 1],
            ["codigo"=> "PSE-3710", "asignatura"=> "Psicología Preventiva", "created_by"=> 1],
            ["codigo"=> "PSE-4011", "asignatura"=> "Psicometría III", "created_by"=> 1],
            ["codigo"=> "PSE-4111", "asignatura"=> "Higiene y Seguridad Industrial", "created_by"=> 1],
            ["codigo"=> "PSE-4312", "asignatura"=> "Psicometría IV", "created_by"=> 1],
            ["codigo"=> "PSE-4412", "asignatura"=> "Psicodiagnóstico Infantil", "created_by"=> 1],
            ["codigo"=> "PSE-4512", "asignatura"=> "Legislación Nacional Aplicada a la Psicología", "created_by"=> 1],
            ["codigo"=> "RD-131;RD-132", "asignatura"=> "Optativa de Humanidades", "created_by"=> 1],
            ["codigo"=> "TBE-052", "asignatura"=> "Inglés I", "created_by"=> 1],
            ["codigo"=> "TBE-093", "asignatura"=> "Inglés II", "created_by"=> 1],
            ["codigo"=> "TBE-134", "asignatura"=> "Inglés III", "created_by"=> 1],
            ["codigo"=> "TBE-175", "asignatura"=> "Inglés IV", "created_by"=> 1],
            ["codigo"=> "TBE-216", "asignatura"=> "Inglés V", "created_by"=> 1],
            ["codigo"=> "TBE-257", "asignatura"=> "Inglés VI", "created_by"=> 1],
            ["codigo"=> "TBE-288", "asignatura"=> "Inglés VII", "created_by"=> 1],
            ["codigo"=> "PSE-5013", "asignatura"=> "Gestión Presupuestal y Emprendimiento", "created_by"=> 1],
            ["codigo"=> "PSE-4713", "asignatura"=> "Psicodiagnóstico en Pacientes Adultos", "created_by"=> 1],
            ["codigo"=> "PSE-4813", "asignatura"=> "Psicología Educativa", "created_by"=> 1],
            ["codigo"=> "PSE-4913", "asignatura"=> "Psicología Jurídica", "created_by"=> 1],
            ["codigo"=> "PSE-5214", "asignatura"=> "Consejería Psicológica", "created_by"=> 1],
            ["codigo"=> "PSE-5114", "asignatura"=> "Técnica de Intervención Psicológica I", "created_by"=> 1],
            ["codigo"=> "PSE-5314", "asignatura"=> "Psicología del Deporte", "created_by"=> 1],
            ["codigo"=> "PSE-5414", "asignatura"=> "Psicología Forense", "created_by"=> 1],
            ["codigo"=> "PSE-5515", "asignatura"=> "Técnica de Intervención Psicológica II", "created_by"=> 1],
            ["codigo"=> "PSE-5615", "asignatura"=> "Elaboración y Ejecución de Proyecto Psicopedagógico", "created_by"=> 1],
            ["codigo"=> "PSE-5716", "asignatura"=> "Práctica Profesional", "created_by"=> 1]
        ]
        ;

        foreach ($clases as $clase) {
            Clase::forceCreate($clase);
        }
    }
}
