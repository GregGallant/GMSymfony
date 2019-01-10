<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController 
{
  
    public function index() 
    {
     
        $newvar = "100";
     
        return new Response(
            '<html>
                <body>
                    <p><strong>Symfony Plan Controller</strong></p>
                    <ul>
                        <li> <a href="/struct">Router Tests</a></li>
                        <li> <a href="/forms">Form Tests</a></li>
                        <li> <a href="/login">Authentication Tests</a></li>
                        <li> <a href="/cacheconfig">Caching Setups</a></li>
                        <li> <a href="/nuxt">NuxtJS or Twig</a></li>
                    </ul>
                </body>
             </html>'
        ); 
    }

    public function struct() 
    {
        return new Response(
            '<html>
                <body>
                    <strong>Controller structuring tests for Symfony</strong>
                    <p> Test Yaml vs. Annotated Routes </p>
                    Setup: <a href="https://symfony.com/doc/current/components/routing.html">https://symfony.com/doc/current/components/routing.html</a>
                </body>
             </html>'
        ); 
    } 


    public function formtest() {
        return new Response(
            '<html>
                <body>
                    <strong>Form structuring</strong>
                    <p> Templating and Twig Setup first </p>
                    Templating: <a href="https://symfony.com/doc/current/templating.html">https://symfony.com/doc/current/templating.html</a>
                    <br/>
                    Doctrine ORM: <a href="https://symfony.com/doc/current/doctrine.html">Doctrine</a>
                    <br/>
                    Forms: <a href="https://symfony.com/doc/current/forms.html">Forms</a> 
                </body>
             </html>'
        ); 

    }

    public function authtest() {
        return new Response(
            '<html>
                <body>
                    <strong>Form structuring</strong>
                    <p> Security </p>
                    <a href="https://symfony.com/doc/current/security.html">https://symfony.com/doc/current/security.html</a>
                    <p> Login Form </p>
                    <a href="https://symfony.com/doc/current/security/form_login.html">https://symfony.com/doc/current/security/form_login.html</a>
                    <p> Login Form Setup</p>
                    <a href="https://symfony.com/doc/current/security/form_login_setup.html">https://symfony.com/doc/current/security/form_login_setup.html</a>
                    <p> Guard Authentication </p>
                    <a href="https://symfony.com/doc/current/security/guard_authentication.html">https://symfony.com/doc/current/security/guard_authentication.html</a>
                </body>
            </html>
            '
        );
    }

    public function cachetest() {
        return new Response(
            '<html>
                <body>
                    <strong>Cache structuring</strong>
                </body>
            </html>'
        );
    }

    public function nuxttest() {
        return new Response(
            '<html>
                <body>
                    <strong><a href="https://nuxtjs.org">NuxtJS</a></strong>
                </body>
            </html>'
         );
    }

}
