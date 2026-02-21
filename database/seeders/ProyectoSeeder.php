<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Proyecto;
use App\Models\Tecnologia;
use Illuminate\Database\Seeder;

class ProyectoSeeder extends Seeder
{
    public function run(): void
    {
        $catEcommerce = Categoria::where('nombre', 'E-commerce')->first();
        $catSistema = Categoria::where('nombre', 'Sistema Web')->first();
        $catApp = Categoria::where('nombre', 'Aplicacion Web')->first();
        $catLanding = Categoria::where('nombre', 'Landing Page')->first();
        $catApi = Categoria::where('nombre', 'API REST')->first();
        $catMovil = Categoria::where('nombre', 'App Movil')->first();

        $proyectos = [
            [
                'titulo' => 'Plataforma de Viajes Compartidos',
                'descripcion' => 'Sistema completo de gestión de viajes con seguimiento en tiempo real y pagos integrados',
                'categoria' => 'E-commerce',
                'categoria_id' => $catEcommerce?->id,
                'tecnologias' => ['Angular', 'Node.js', 'MongoDB'],
                'color_fondo' => 'linear-gradient(135deg, #00d4ff 0%, #6366f1 100%)',
                'icono' => 'M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2',
                'imagen' => 'assets/images/proyectos/viajes-app.jpg',
                'orden' => 1,
                'techs' => ['Angular', 'Node.js', 'MongoDB'],
            ],
            [
                'titulo' => 'Sistema Hotelero Integral',
                'descripcion' => 'Gestión completa de reservas, check-in/out digital y panel administrativo avanzado',
                'categoria' => 'Sistema Web',
                'categoria_id' => $catSistema?->id,
                'tecnologias' => ['React', 'Python', 'PostgreSQL'],
                'color_fondo' => 'linear-gradient(135deg, #6366f1 0%, #f59e0b 100%)',
                'icono' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',
                'imagen' => 'assets/images/proyectos/hotel-app.jpg',
                'orden' => 2,
                'techs' => ['React', 'Python', 'PostgreSQL'],
            ],
            [
                'titulo' => 'E-commerce de Moda',
                'descripcion' => 'Tienda online con catálogo dinámico, carrito inteligente y múltiples métodos de pago',
                'categoria' => 'E-commerce',
                'categoria_id' => $catEcommerce?->id,
                'tecnologias' => ['Vue.js', 'Laravel', 'MySQL'],
                'color_fondo' => 'linear-gradient(135deg, #f59e0b 0%, #10b981 100%)',
                'icono' => 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z',
                'imagen' => 'assets/images/proyectos/moda-app.jpg',
                'orden' => 3,
                'techs' => ['Vue.js', 'Laravel', 'MySQL'],
            ],
            [
                'titulo' => 'Dashboard Analítico',
                'descripcion' => 'Panel de control con visualización de datos en tiempo real y reportes automáticos',
                'categoria' => 'Aplicacion Web',
                'categoria_id' => $catApp?->id,
                'tecnologias' => ['Angular', 'TypeScript', 'Node.js'],
                'color_fondo' => 'linear-gradient(135deg, #10b981 0%, #00d4ff 100%)',
                'icono' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                'imagen' => 'assets/images/proyectos/dashboard-app.jpg',
                'orden' => 4,
                'techs' => ['Angular', 'TypeScript', 'Node.js'],
            ],
            [
                'titulo' => 'Landing Corporativa MyTech',
                'descripcion' => 'Sitio web corporativo con animaciones avanzadas, formulario de contacto y blog integrado',
                'categoria' => 'Landing Page',
                'categoria_id' => $catLanding?->id,
                'tecnologias' => ['HTML5', 'CSS3', 'JavaScript'],
                'color_fondo' => 'linear-gradient(135deg, #6366f1 0%, #ec4899 100%)',
                'icono' => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9',
                'imagen' => 'assets/images/proyectos/landing-app.jpg',
                'orden' => 5,
                'techs' => ['HTML5', 'CSS3', 'JavaScript', 'Sass'],
            ],
            [
                'titulo' => 'API de Gestión Financiera',
                'descripcion' => 'API REST robusta para procesamiento de transacciones, reportes contables y conciliación bancaria',
                'categoria' => 'API REST',
                'categoria_id' => $catApi?->id,
                'tecnologias' => ['Node.js', 'TypeScript', 'PostgreSQL'],
                'color_fondo' => 'linear-gradient(135deg, #00d4ff 0%, #10b981 100%)',
                'icono' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                'imagen' => 'assets/images/proyectos/finanzas-api.jpg',
                'orden' => 6,
                'techs' => ['Node.js', 'TypeScript', 'PostgreSQL', 'Docker'],
            ],
            [
                'titulo' => 'App Delivery Express',
                'descripcion' => 'Aplicación móvil de entregas con tracking GPS en tiempo real y notificaciones push',
                'categoria' => 'App Movil',
                'categoria_id' => $catMovil?->id,
                'tecnologias' => ['React', 'Node.js', 'MongoDB'],
                'color_fondo' => 'linear-gradient(135deg, #ec4899 0%, #f59e0b 100%)',
                'icono' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z',
                'imagen' => 'assets/images/proyectos/delivery-app.jpg',
                'orden' => 7,
                'techs' => ['React', 'Node.js', 'MongoDB'],
            ],
            [
                'titulo' => 'Plataforma Educativa Online',
                'descripcion' => 'LMS completo con videoclases, evaluaciones automáticas, certificados y foro de discusión',
                'categoria' => 'Sistema Web',
                'categoria_id' => $catSistema?->id,
                'tecnologias' => ['Angular', 'Laravel', 'MySQL'],
                'color_fondo' => 'linear-gradient(135deg, #8b5cf6 0%, #06b6d4 100%)',
                'icono' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
                'imagen' => 'assets/images/proyectos/educativa-app.jpg',
                'orden' => 8,
                'techs' => ['Angular', 'Laravel', 'MySQL', 'Sass'],
            ],
            [
                'titulo' => 'Marketplace de Servicios',
                'descripcion' => 'Plataforma de conexión entre profesionales y clientes con sistema de reseñas y pagos',
                'categoria' => 'E-commerce',
                'categoria_id' => $catEcommerce?->id,
                'tecnologias' => ['React', 'Python', 'PostgreSQL'],
                'color_fondo' => 'linear-gradient(135deg, #f59e0b 0%, #6366f1 100%)',
                'icono' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z',
                'imagen' => 'assets/images/proyectos/marketplace-app.jpg',
                'orden' => 9,
                'techs' => ['React', 'Python', 'PostgreSQL'],
            ],
            [
                'titulo' => 'Sistema de Inventario Cloud',
                'descripcion' => 'Gestión de inventario multinivel con alertas de stock, códigos de barras y reportes',
                'categoria' => 'Aplicacion Web',
                'categoria_id' => $catApp?->id,
                'tecnologias' => ['Vue.js', 'Node.js', 'MySQL'],
                'color_fondo' => 'linear-gradient(135deg, #10b981 0%, #3b82f6 100%)',
                'icono' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
                'imagen' => 'assets/images/proyectos/inventario-app.jpg',
                'orden' => 10,
                'techs' => ['Vue.js', 'Node.js', 'MySQL', 'Docker'],
            ],
            [
                'titulo' => 'Landing Restaurante Gourmet',
                'descripcion' => 'Sitio web para restaurante con menú interactivo, reservas online y galería de platos',
                'categoria' => 'Landing Page',
                'categoria_id' => $catLanding?->id,
                'tecnologias' => ['HTML5', 'CSS3', 'JavaScript'],
                'color_fondo' => 'linear-gradient(135deg, #dc2626 0%, #f59e0b 100%)',
                'icono' => 'M3 3h18v18H3V3zm3 3v4h4V6H6zm8 0v4h4V6h-4zM6 14v4h4v-4H6zm8 0v4h4v-4h-4z',
                'imagen' => 'assets/images/proyectos/restaurante-app.jpg',
                'orden' => 11,
                'techs' => ['HTML5', 'CSS3', 'JavaScript', 'Figma'],
            ],
            [
                'titulo' => 'API de Notificaciones Multicanal',
                'descripcion' => 'Microservicio de notificaciones vía email, SMS, push y WhatsApp con cola de mensajes',
                'categoria' => 'API REST',
                'categoria_id' => $catApi?->id,
                'tecnologias' => ['Python', 'Docker', 'MongoDB'],
                'color_fondo' => 'linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%)',
                'icono' => 'M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9',
                'imagen' => 'assets/images/proyectos/notificaciones-api.jpg',
                'orden' => 12,
                'techs' => ['Python', 'Docker', 'MongoDB'],
            ],
            [
                'titulo' => 'App Fitness Tracker',
                'descripcion' => 'Aplicación móvil para seguimiento de rutinas de ejercicio, nutrición y progreso personal',
                'categoria' => 'App Movil',
                'categoria_id' => $catMovil?->id,
                'tecnologias' => ['React', 'TypeScript', 'Node.js'],
                'color_fondo' => 'linear-gradient(135deg, #10b981 0%, #ec4899 100%)',
                'icono' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                'imagen' => 'assets/images/proyectos/fitness-app.jpg',
                'orden' => 13,
                'techs' => ['React', 'TypeScript', 'Node.js'],
            ],
            [
                'titulo' => 'CRM Empresarial',
                'descripcion' => 'Sistema de gestión de relaciones con clientes, pipeline de ventas y automatización de marketing',
                'categoria' => 'Sistema Web',
                'categoria_id' => $catSistema?->id,
                'tecnologias' => ['Angular', 'PHP', 'MySQL'],
                'color_fondo' => 'linear-gradient(135deg, #6366f1 0%, #10b981 100%)',
                'icono' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                'imagen' => 'assets/images/proyectos/crm-app.jpg',
                'orden' => 14,
                'techs' => ['Angular', 'PHP', 'MySQL', 'Git'],
            ],
            [
                'titulo' => 'Tienda de Electrónicos',
                'descripcion' => 'E-commerce especializado en tecnología con comparador de productos y wishlist',
                'categoria' => 'E-commerce',
                'categoria_id' => $catEcommerce?->id,
                'tecnologias' => ['React', 'Laravel', 'PostgreSQL'],
                'color_fondo' => 'linear-gradient(135deg, #00d4ff 0%, #f59e0b 100%)',
                'icono' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                'imagen' => 'assets/images/proyectos/electronicos-app.jpg',
                'orden' => 15,
                'techs' => ['React', 'Laravel', 'PostgreSQL'],
            ],
        ];

        foreach ($proyectos as $data) {
            $techNames = $data['techs'];
            unset($data['techs']);

            $proyecto = Proyecto::create($data);

            // Vincular tecnologias via tabla pivot (relacion N:N)
            $techIds = Tecnologia::whereIn('nombre', $techNames)->pluck('id');
            $proyecto->tecnologiasRelacion()->attach($techIds);
        }
    }
}
