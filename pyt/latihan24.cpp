#include <iostream>
using namespace std;
void tukar (int &a, int &b) {
    int temp = a;
    a = b;
    b = temp;
}

int main () {
    int x, y;
    cout << " masukan nilai x : ";
    cin >> x;
    cout << " masukan nilai y : ";
    cin >> y;

    cout << " sebelum ditukan : x = " << x << ", y * " << y << endl;
    cout << " setelah ditukan : x = " << x << ", y * " << y << endl;
    return 0;
}
