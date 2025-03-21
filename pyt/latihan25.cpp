#include <iostream>
using namespace std;
double hitungRataRata(int arr[], int ukuran) {
    double total = 0;
    for (int i = 0; i < ukuran; i++) {
        total += arr[i];
    }
    return total/ ukuran;
}

int main () {
    int nilai[] = {85, 90, 78, 92, 88};
    int ukuran = sizeof(nilai) / sizeof(nilai[0]);

    cout << "rata rata nilai " << hitungRataRata(nilai, ukuran) << endl;
    return 0; 
}
