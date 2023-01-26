import 'package:flutter/material.dart';
import '../../auth/account_page.dart';
import '../favirites/favorites_page.dart';
import '../forum/forum_page.dart';
import '../Opportunities/opportunities_page.dart';

class HomePage extends StatefulWidget {
  const HomePage({Key? key}) : super(key: key);

  @override
  _HomePageState createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
  //page controller on the bottom click
  PageController _pageController = PageController();
  final List<Widget> _screens = [
     const OpportunitiesPages(),
     const ForumPage(),
     const FavoriesPage(),
     const ComptePage(),
  ];
  int _selectedIndex = 0;
  void _onPageChanged(int pageIndex) {

    setState(() {
      _selectedIndex = pageIndex;
    });
  }
  void _onItemTapped(int itemIndex) {
 _pageController.jumpToPage(itemIndex);

  }
  @override
  Widget build(BuildContext context) {
        return Scaffold(
     body: PageView(
        controller: _pageController,
        physics: const NeverScrollableScrollPhysics(),
        onPageChanged: _onPageChanged,
        children: _screens,

      ),

      bottomNavigationBar: BottomNavigationBar(
        //backgroundColor: Colors.white,

        type: BottomNavigationBarType.fixed,
        onTap: _onItemTapped,
        items:  const [
          BottomNavigationBarItem(
            icon: Icon(Icons.home),
            label: 'Opportunités',

          ),

          BottomNavigationBarItem(icon: Icon(Icons.chat),
            label: 'Forum',
          ),

          BottomNavigationBarItem(icon: Icon(Icons.favorite),
            label: 'Favories',
          ),
          BottomNavigationBarItem(icon: Icon(Icons.person),
            label: 'Compte',
          ),
        ],
        // La propriété currentIndex permet de savoir quel item est sélectionné
        currentIndex: _selectedIndex,
        selectedItemColor: Colors.purple,
        //unselectedItemColor: Colors.black38,
        selectedFontSize: 15,
        //unselectedFontSize: 18,
        selectedLabelStyle: const TextStyle(fontWeight: FontWeight.bold),
        //unselectedLabelStyle: const TextStyle(fontWeight: FontWeight.bold),





      )
    );
  }
}
