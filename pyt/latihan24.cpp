#include <iostream>
using namespace std;
int cariString(string arr[], int n, string buah) {
    for (int i = 0; i < n; i++)
    {
        if (arr[i] == buah) 
        {
            return i;
        }
        
    }
    return -1;
    
}

void tampilkanHasil(int hasil) {
    if (hasil != -1)
    {
        cout << "string ditemukan di indeks ke - " << hasil << endl;
    } else {
        cout << "string tidak ditemukan" << endl;
    }
    
}

int main() {
    string arr[] = {"apel", "jeruk", "mangga", "pisang"};
    int n = sizeof(arr) / sizeof(arr[0]);
    string buah;

    cout << "Masukan nama buah yang ingin dicari: ";
    cin >> buah;

    int hasil = cariString(arr, n, buah);

    tampilkanHasil(hasil);

    return 0;
}
