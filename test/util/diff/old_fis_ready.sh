#!/home/work/.jumbo/bin/expect

spawn su - fis -c "sh /home/work/repos/fis2_pc_diff/test/util/diff/release.sh old"
expect "Password:"
send cqmyg123\r
expect eof
exit
