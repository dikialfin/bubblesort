void main() {
  List listNumber = [6, 1, 4, 9, 2, 7, 3, 5, 8];
  int listNumberLength = listNumber.length;

  print("Before Sorting : $listNumber");

  for (var pointer = 0; pointer < listNumberLength; pointer++) {
    for (var comparator = 0;
        comparator < listNumberLength - pointer - 1;
        comparator++) {
      if (listNumber[comparator] > listNumber[comparator + 1]) {
        int temp = listNumber[comparator];
        listNumber[comparator] = listNumber[comparator + 1];
        listNumber[comparator + 1] = temp;
      }
    }
  }

  print("After Sorting : $listNumber");
}
