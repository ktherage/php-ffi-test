#include <math.h>
#include <stdio.h>
#include <limits.h>

int main() {
  int n = 2000000;
  // int n = 120;
  int numbers[n];

  // range(2, n)
  int a = 0;
  int b = 2;
  while (b < n) {
    numbers[a] = b;
    a++;
    b++;
  }

  // prime numbers
  int i = 2;
  while (i <= sqrt(n)) {
    for (int j = 0; j < n; j++) {
      int currentNumber = numbers[j];
      if (-1 == currentNumber || i == currentNumber) {
        continue;
      }
      if ((currentNumber % i) == 0) {
        numbers[j] = -1;
      }
    }
    i++;
  }

  // print numbers
//  for (int i = 0; i < n; i++) {
//    if (-1 != numbers[i]) {
//      printf( "%d ", numbers[i]);
//    }
//  }

  return 0;
}
