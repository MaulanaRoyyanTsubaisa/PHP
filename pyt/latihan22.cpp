#include <iostream>
using namespace std;
int main() {
    string arr[] = {"apel", "jeruk", "mangga", "pisang"};
    int n = sizeof(arr) / sizeof(arr[0]);
    string target;
    int found = -1;

    cout << "Masukan nama buah yng ingin dicari ";
    cin >> target;

    for (int i = 0; i < n; i++) {
        if (arr[i] == target ){
            found = i;
            break;
        }
    }

    if (found != -1)
    {
        cout << "Nama buah ditemukan di indeks ke - " << found << endl;
    }
    return 0;
    
}