#include <iostream>
using namespace std;
void tabelPerkalian(int n) {
    for (int i = 1; i <= 10; i++ ) {
        cout << n << "x" << i << " = " << n * i << endl;
    }
    }

    int main () {
        int angka;
        cout << " masukan angka: ";
        cin >> angka;

        tabelPerkalian(angka);
        return 0;
    }
