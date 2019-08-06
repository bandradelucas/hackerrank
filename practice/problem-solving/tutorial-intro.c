#include <stdio.h>
#include <string.h>
#include <math.h>
#include <stdlib.h>

int main() {
    int V, n, i;
    
    scanf("%i", &V);
    scanf("%i", &n);
    int ar[n];
    for (i = 0; i < n; i++) {
        scanf("%i", &ar[i]);
    }
    for (i = 0; i < n; i++) {
        if (ar[i] == V) {
            printf("%i", i);        
        }
    }
    /* Enter your code here. Read input from STDIN. Print output to STDOUT */
    
    return 0;
}
