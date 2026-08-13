import os, re
with open('index.php', 'r', encoding='utf-8') as f: index = f.read()
with open('archive_index.html', 'r', encoding='utf-8') as f: archive = f.read()

slider_idx = index.find('<section class="vc_section')
if slider_idx == -1: exit(1)
index_start = index[:slider_idx]

main_idx = index.find('</main>')
index_end = index[main_idx:]

slider_arch_idx = archive.find('<section id="homepagep1"')
main_arch_idx = archive.find('</main>')
if slider_arch_idx == -1 or main_arch_idx == -1: exit(1)

archive_middle = archive[slider_arch_idx:main_arch_idx]
archive_middle = re.sub(r'https?://web\.archive\.org/web/\d+(?:im_|js_|css_)?/', '', archive_middle)
archive_middle = re.sub(r'https?://(?:www\.)?globescott\.net/', '/', archive_middle)

with open('index.php', 'w', encoding='utf-8') as f: f.write(index_start + archive_middle + '\n' + index_end)
