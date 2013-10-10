#!/home/work/.jumbo/bin/expect

spawn su - fis -c "sh /home/work/repos/fis2.0_pc/test/util/diff/release.sh old"
expect "Password:"
send cqmyg123\r
expect eof
exit
