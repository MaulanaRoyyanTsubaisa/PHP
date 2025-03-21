#include <iostream>
using namespace std;
int faktorial(int n) {
    if (n == 0) {
        return 1;
    } else {
        return n * faktorial(n-1);
    }
}

int main() {
    int angka;
    cout <<"masukan angka : " ;
    cin >> angka;

    cout << "faktorial dari " << angka << "adalah " << faktorial (angka) <<endl;
}

