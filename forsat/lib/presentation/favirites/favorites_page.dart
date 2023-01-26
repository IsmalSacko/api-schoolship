import 'package:flutter/material.dart';

class FavoriesPage extends StatefulWidget {
  const FavoriesPage({Key? key}) : super(key: key);

  @override
  _FavoriesPageState createState() => _FavoriesPageState();
}

class _FavoriesPageState extends State<FavoriesPage> {

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        centerTitle: true,
        title: const Text('Favories Page'),
      ),
    );
  }
}
