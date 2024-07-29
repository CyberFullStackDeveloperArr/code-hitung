def hitung_huruf(file_path):
    
    with open(file_path, 'r') as file:

        konten = file.read()

        jumlah_huruf = sum(1 for char in konten if char.isalpha())
    return jumlah_huruf

file_path = input("Masukkan Nama File .txt: ")
jumlah_huruf = hitung_huruf(file_path)
print(f"Jumlah Huruf: {jumlah_huruf}")