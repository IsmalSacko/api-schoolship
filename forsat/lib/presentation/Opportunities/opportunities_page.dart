import 'package:flutter/material.dart';

class OpportunitiesPages extends StatefulWidget {

    const OpportunitiesPages({Key? key}) : super(key: key);
  @override
  _OpportunitiesPagesState createState() => _OpportunitiesPagesState();
}

class _OpportunitiesPagesState extends State<OpportunitiesPages> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        centerTitle: true,
        title: const Text('Opportunités'),
      ),
     body: const Center(
        child: Text('Nous sommes dans la page Opportunités !'),

      )

    );
  }
}
