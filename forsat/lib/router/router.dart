import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:forsat/auth/register_page.dart';
import 'package:forsat/router/route_constants.dart';

import '../auth/login_page.dart';
import '../presentation/Home/home_page.dart';
import '../presentation/Opportunities/opportunities_page.dart';
import '../presentation/not_found/not_found_page.dart';

class MyRouter {
    static Route<dynamic> onGenerateRoute(RouteSettings routeSettings){
        switch(routeSettings.name){
            case opportunitiesRoute:
                return MaterialPageRoute(builder: (_) => const OpportunitiesPages());
            case HomeRoute:
                return MaterialPageRoute(builder: (_) => const HomePage());
            case loginRoute:
                return MaterialPageRoute(builder: (_) => const LoginPage());
            case registerRoute:
                return MaterialPageRoute(builder: (_) => const RegisterPage());

            default:
                return MaterialPageRoute(builder: (_) => const NotFoundPage());
    }
}
}
