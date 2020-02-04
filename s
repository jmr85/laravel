warning: LF will be replaced by CRLF in app/Http/Controllers/PortfolioController.php.
The file will have its original line endings in your working directory.
[1mdiff --git a/app/Http/Controllers/PortfolioController.php b/app/Http/Controllers/PortfolioController.php[m
[1mindex 1b66488..72b01ed 100644[m
[1m--- a/app/Http/Controllers/PortfolioController.php[m
[1m+++ b/app/Http/Controllers/PortfolioController.php[m
[36m@@ -3,6 +3,7 @@[m
 namespace App\Http\Controllers;[m
 [m
 use Illuminate\Http\Request;[m
[32m+[m[32muse Illuminate\Support\Facades\DB;[m
 [m
 class PortfolioController extends Controller[m
 {[m
[36m@@ -14,12 +15,7 @@[m [mclass PortfolioController extends Controller[m
     public function index()[m
     {[m
 [m
[31m-        $portfolio = [[m
[31m-            ['title' => 'Proyecto #1'],[m
[31m-            ['title' => 'Proyecto #2'],[m
[31m-            ['title' => 'Proyecto #3'],[m
[31m-            ['title' => 'Proyecto #4'],[m
[31m-        ];[m
[32m+[m[32m        $portfolio = DB::table('projects')->get(); //obtiene todos los datos[m
         return view('portfolio', compact('portfolio'));[m
     }[m
 }[m
[1mdiff --git a/resources/views/portfolio.blade.php b/resources/views/portfolio.blade.php[m
[1mindex e91d2e7..cf49426 100644[m
[1m--- a/resources/views/portfolio.blade.php[m
[1m+++ b/resources/views/portfolio.blade.php[m
[36m@@ -7,7 +7,7 @@[m
 	<ul>[m
 [m
 		@forelse($portfolio as $portfolioItem)[m
[31m-			<li>{{ $portfolioItem['title'] }} {{$loop->last? 'ultimo': ''}}</pre></li>[m
[32m+[m			[32m<li>{{ $portfolioItem->title }}</li>[m
 		@empty[m
 			<li>No hay proyectos para mostrar</li>[m
 		@endforelse[m
