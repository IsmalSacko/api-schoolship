import 'package:flutter/material.dart';
import 'package:forsat/router/route_constants.dart';
import 'package:forsat/router/router.dart';


void main() {
  runApp(const Forsat());
}

class Forsat extends StatelessWidget {
  const Forsat({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Forsat App',
      debugShowCheckedModeBanner: false,
      theme: ThemeData(

        primarySwatch: Colors.blue,
        //visualDensity: VisualDensity.adaptivePlatformDensity,
      ),

      //home:  OpportunitiesPages(),
      //home:  OpportunitiesPages(),
      onGenerateRoute: MyRouter.onGenerateRoute,
      initialRoute: HomeRoute,


    );
  }
}
//Architecture
// Presentation layer (UI) Screens
// Network layer (API) Services
// Router layer (Navigation) Router
