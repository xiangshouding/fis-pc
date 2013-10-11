#!/home/work/.jumbo/bin/expect

set timeout 60
spawn su - fis -c "sh /home/work/repos/fis2.0_pc/test/util/diff/release.sh old"
expect "Password:"
send cqmyg123\r
expect eof
exit
