<?php

namespace Database\Seeders;

use App\Models\Servicio;
use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    public function run(): void
    {
        $servicios = [
            [
                'titulo' => 'Desarrollo Web Frontend',
                'descripcion' => 'Interfaces modernas y responsivas que brindan experiencias excepcionales',
                'caracteristicas' => ['React, Angular, Vue.js', 'Diseño responsive', 'Optimización SEO', 'Animaciones fluidas'],
                'icono' => '<path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>',
                'color_fondo' => 'linear-gradient(135deg, rgba(0, 212, 255, 0.1), rgba(99, 102, 241, 0.1))',
                'orden' => 1,
            ],
            [
                'titulo' => 'Desarrollo Backend',
                'descripcion' => 'Arquitecturas robustas y escalables para aplicaciones complejas',
                'caracteristicas' => ['Node.js, Python, PHP', 'APIs REST y GraphQL', 'Bases de datos SQL/NoSQL', 'Microservicios'],
                'icono' => '<path d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4" stroke="currentColor" stroke-width="2"/>',
                'color_fondo' => 'linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(245, 158, 11, 0.1))',
                'orden' => 2,
            ],
            [
                'titulo' => 'E-commerce Solutions',
                'descripcion' => 'Tiendas en línea completas que aumentan tus ventas digitales',
                'caracteristicas' => ['Pasarelas de pago', 'Gestión de inventario', 'Panel administrativo', 'Marketing integrado'],
                'icono' => '<path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" stroke="currentColor" stroke-width="2"/>',
                'color_fondo' => 'linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(16, 185, 129, 0.1))',
                'orden' => 3,
            ],
            [
                'titulo' => 'Aplicaciones Web',
                'descripcion' => 'Sistemas personalizados para automatizar y optimizar procesos',
                'caracteristicas' => ['CRM y ERP', 'Dashboards interactivos', 'Automatización', 'Integraciones API'],
                'icono' => '<path d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" stroke="currentColor" stroke-width="2"/>',
                'color_fondo' => 'linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(0, 212, 255, 0.1))',
                'orden' => 4,
            ],
            [
                'titulo' => 'Diseño UX/UI',
                'descripcion' => 'Experiencias de usuario intuitivas y diseños visualmente impactantes',
                'caracteristicas' => ['Prototipado', 'Investigación UX', 'Design Systems', 'Testing de usabilidad'],
                'icono' => '<path d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" stroke="currentColor" stroke-width="2"/>',
                'color_fondo' => 'linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(0, 212, 255, 0.1))',
                'orden' => 5,
            ],
            [
                'titulo' => 'Mantenimiento & Soporte',
                'descripcion' => 'Aseguramos que tu sitio funcione perfectamente 24/7',
                'caracteristicas' => ['Monitoreo constante', 'Actualizaciones', 'Soporte técnico', 'Backups automáticos'],
                'icono' => '<path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" stroke="currentColor" stroke-width="2"/><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke="currentColor" stroke-width="2"/>',
                'color_fondo' => 'linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(99, 102, 241, 0.1))',
                'orden' => 6,
            ],
            [
                'titulo' => 'Consultoría Tecnológica',
                'descripcion' => 'Asesoramiento experto para elegir la mejor stack tecnológica para tu negocio',
                'caracteristicas' => ['Análisis de requerimientos', 'Arquitectura de software', 'Roadmap tecnológico', 'Evaluación de herramientas'],
                'color_fondo' => 'linear-gradient(135deg, rgba(0, 212, 255, 0.1), rgba(245, 158, 11, 0.1))',
                'orden' => 7,
            ],
            [
                'titulo' => 'DevOps & Cloud',
                'descripcion' => 'Infraestructura en la nube y automatización de despliegues',
                'caracteristicas' => ['AWS, Azure, GCP', 'CI/CD Pipelines', 'Docker y Kubernetes', 'Monitoreo de infraestructura'],
                'color_fondo' => 'linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(99, 102, 241, 0.1))',
                'orden' => 8,
            ],
            [
                'titulo' => 'Aplicaciones Móviles',
                'descripcion' => 'Apps nativas e híbridas para iOS y Android con rendimiento óptimo',
                'caracteristicas' => ['React Native, Flutter', 'Publicación en stores', 'Push notifications', 'Offline support'],
                'color_fondo' => 'linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(16, 185, 129, 0.1))',
                'orden' => 9,
            ],
            [
                'titulo' => 'SEO & Marketing Digital',
                'descripcion' => 'Posicionamiento web y estrategias digitales para aumentar tu visibilidad',
                'caracteristicas' => ['SEO on-page y off-page', 'Google Analytics', 'SEM y campañas PPC', 'Content marketing'],
                'color_fondo' => 'linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(0, 212, 255, 0.1))',
                'orden' => 10,
            ],
            [
                'titulo' => 'Seguridad Informática',
                'descripcion' => 'Protección integral de tus aplicaciones y datos sensibles',
                'caracteristicas' => ['Auditorías de seguridad', 'Cifrado de datos', 'Autenticación robusta', 'Cumplimiento OWASP'],
                'color_fondo' => 'linear-gradient(135deg, rgba(220, 38, 38, 0.1), rgba(99, 102, 241, 0.1))',
                'orden' => 11,
            ],
            [
                'titulo' => 'Business Intelligence',
                'descripcion' => 'Transformamos datos en decisiones inteligentes con dashboards y reportes',
                'caracteristicas' => ['Power BI, Tableau', 'ETL y Data Warehousing', 'KPIs personalizados', 'Reportes automáticos'],
                'color_fondo' => 'linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(245, 158, 11, 0.1))',
                'orden' => 12,
            ],
            [
                'titulo' => 'Testing & QA',
                'descripcion' => 'Aseguramiento de calidad con pruebas automatizadas y manuales',
                'caracteristicas' => ['Testing unitario', 'Testing E2E', 'Performance testing', 'Selenium, Cypress'],
                'color_fondo' => 'linear-gradient(135deg, rgba(0, 212, 255, 0.1), rgba(16, 185, 129, 0.1))',
                'orden' => 13,
            ],
            [
                'titulo' => 'Integración de APIs',
                'descripcion' => 'Conectamos tus sistemas con servicios de terceros de forma segura',
                'caracteristicas' => ['APIs de pago (Stripe, PayPal)', 'Redes sociales', 'CRMs y ERPs', 'Servicios de mensajería'],
                'color_fondo' => 'linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(245, 158, 11, 0.1))',
                'orden' => 14,
            ],
            [
                'titulo' => 'Capacitación Técnica',
                'descripcion' => 'Formación personalizada para tu equipo en las últimas tecnologías',
                'caracteristicas' => ['Workshops presenciales', 'Cursos online', 'Mentorías 1-a-1', 'Material certificado'],
                'color_fondo' => 'linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(16, 185, 129, 0.1))',
                'orden' => 15,
            ],
        ];

        foreach ($servicios as $servicio) {
            Servicio::create($servicio);
        }
    }
}
