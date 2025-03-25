#include <iostream>
using namespace std;

int main () {
    int arr[] = { 10, 20, 30, 40, 50};
    int n = sizeof(arr) / sizeof(arr[0]);
    int target, found = -1;

    cout << "Masukan angka yng ingin dicari : ";
    cin>> target;
    
    for (int i = 0; i < n; i++) {
        if (arr[i] == target ) {
            found = i ;
            break;
        }
    }

    if (found != -1 ){
        cout << "Angka ditemukan di indeks ke - " << found << endl;
    } else {
        cout << "angka tidak ditemukan" << endl;
    }
    return 0;
}


