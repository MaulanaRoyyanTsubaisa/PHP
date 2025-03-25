#include <iostream>
using namespace std;
// fungsi untuk mencari angka dala arry
int cariAgka(int arr[], int n, int target) {
    for (int i = 0; i < n; i++)
    {
        if (arr[i] == target)       
        {
           return i;
        }
        
    }
    return -1;
    
}

void tampilkanHasil(int hasil) {
    if (hasil != -1)
    {
        cout << "Angka ditemukan di indeks ke - " << hasil << endl;
    } else {
        cout << "Angka tidak ditemukan" << endl;
    }
    
}

int main() {
    int arr[] = {10, 20, 30, 40, 50};
    int n = sizeof(arr) / sizeof(arr[0]);
    int target;

    cout << "Masukan angka yang ingin dicari: ";
    cin >> target;

    int hasil = cariAgka(arr, n, target);

    tampilkanHasil(hasil);

    return 0;
}