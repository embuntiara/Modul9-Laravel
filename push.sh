# Tambahkan semua perubahan ke staging
git add .

# Commit dengan pesan default (ubah pesan jika diperlukan)
git commit -m "Automated commit at $(date +"%Y-%m-%d %H:%M:%S")"

# Push ke branch aktifclear
branch=$(git rev-parse --abbrev-ref HEAD)
git push origin $branch

echo "Changes have been pushed to branch $branch."